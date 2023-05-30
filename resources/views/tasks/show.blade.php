<x-layout>
    <div class="flex flex-col rounded overflow-hidden shadow-lg border p-2 m-2">
        <div class="text-lg font-bold">{{ $task->title }}</div>
        <div class="text-gray-500 text-sm">{{ $task->description }}</div>
        <div class="text-right text-gray-500 text-sm mt-auto">Due: {{ date('d/m H:i', strtotime($task->due_date))}}</div>
    </div>
</x-layout>