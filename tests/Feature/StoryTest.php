<?php

namespace Tests\Feature;

use App\Models\Story;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Support\Str;

class StoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function stories_index_contains_livewire_component()
    {
        $this->get(route("stories"))
            ->assertSuccessful()
            ->assertSeeLivewire("story");
    }

    /** @test */
    public function story_can_be_created()
    {
        Livewire::test("story")
            ->set("title", "My Story")
            ->call("add");

        $this->assertTrue(Story::whereTitle("My Story")->exists());
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test("story")
            ->set("title", "")
            ->call("add")
            ->assertHasErrors(["title" => "required"]);
    }

    /** @test */
    public function title_is_not_more_than_255_characters()
    {
        Livewire::test("story")
            ->set("title", Str::random(256))
            ->call("add")
            ->assertHasErrors(["title" => "max:255"]);
    }

    /** @test */
    public function last_added_story_is_visible()
    {
        Livewire::test("story")
            ->set("title", "My Last Story")
            ->call("add");

        $view = $this->get(route("stories"));
        $view->assertSuccessful();
        $view->assertSeeLivewire("story");
        $view->assertSee("My Last Story");
    }
}
