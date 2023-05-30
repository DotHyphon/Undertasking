<x-layout>
    <div class="flex lg:hidden grid grid-cols-3" id="tabs">
        <x-titlecard class="tab w-full" data-target="#overdue"> Overdue</x-titlecard>
        <x-titlecard class="tab w-full" data-target="#today"> Today</x-titlecard>
        <x-titlecard class="tab w-full" data-target="#comingUp"> Coming Up</x-titlecard>
    </div>

    <div class="grid lg:grid-cols-3 gap-4 justify-items-center">
        <x-card id='overdue'>
            <? $count = 0; ?>
            <x-titlecard class="hidden lg:flex mb-6">Overdue</x-titlecard>
            <ul>
                @foreach ($tasks as $task)
                    @if ($task->due_date < now())
                        <? $count++; ?>
                        <li>
                            <x-taskcard :task="$task" />
                        </li>
                    @endif
                @endforeach
                @if ($count == 0)
                    <x-card>No tasks overdue</x-card>
                @endif
                <br>
        </x-card>
        <x-card id='today'>
            <? $count = 0; ?>
            <x-titlecard class="hidden lg:flex mb-6">Today</x-titlecard>
            <ul>
                @foreach ($tasks as $task)
                    @if ($task->due_date > now() && $task->due_date < now()->addDay())
                        <? $count++; ?>
                        <li>
                            <x-taskcard :task="$task" />
                        </li>
                    @endif
                @endforeach
                @if ($count == 0)
                    <x-card>All tasks complete</x-card>
                @endif
                <br>
        </x-card>
        <x-card id='comingUp'>
            <? $count = 0; ?>
            <x-titlecard class="hidden lg:flex mb-6">Coming Up</x-titlecard>
            <ul>
                @foreach ($tasks as $task)
                    @if ($task->due_date > now()->addDay())
                        <? $count++; ?>
                        <li>
                            <x-taskcard :task="$task" />
                        </li>
                    @endif    
                @endforeach
                @if ($count == 0)
                    <x-card>No tasks coming up</x-card>
                @endif
                <br>
        </x-card>
        <br>
    </div>
</x-layout>

<script type="text/javascript" src="{{ asset('js/tabController.js') }}"></script>
