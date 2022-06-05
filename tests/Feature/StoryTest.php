<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoryTest extends TestCase
{
    /** @test */
    public function stories_index_contains_livewire_component()
    {
        $this->get(route("stories"))
            ->assertSuccessful()
            ->assertSeeLivewire("story");
    }
}
