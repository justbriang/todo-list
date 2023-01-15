<?php

namespace Tests\Feature;

use App\Http\Livewire\TasksWire;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TasksTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_create_task()
    {
        $this->actingAs(User::factory()->create());
        Livewire::test(TasksWire::class)
            ->set('title', 'foo')
            ->set('description', 'this is just a test')
            ->set('due_date', now())
            ->call('createTask');

        $this->assertTrue(Task::whereTitle('foo')->exists());
    }
    function test_title_is_required()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(TasksWire::class)
            ->set('title', '')
            ->call('createTask')
            ->assertHasErrors(['title' => 'required']);
    }

    function test_description_is_required()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(TasksWire::class)
            ->set('title', 'foo')
            ->set('due_date', now())
            ->call('createTask')
            ->assertHasErrors(['description' => 'required']);
    }
    function test_due_date_is_required()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(TasksWire::class)
            ->set('title', 'foo')
            ->set('description', 'this is just a test')
            ->call('createTask')
            ->assertHasErrors(['due_date' => 'required']);
    }
}
