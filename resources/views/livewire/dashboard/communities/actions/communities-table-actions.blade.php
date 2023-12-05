<div class="flex justify-end items-center space-x-2">
    <a href="{{route('dashboard.communities.delete', ['id' => $id])}}" class="mr-1 cursor-pointer hover:text-project-error"><x-icons.delete-trash></x-icons.delete-trash></a>
    <a onclick="scrollToBottom();" wire:click="$emit('update-community', {{ $id }})" class="mr-1 cursor-pointer hover:text-project-icon-hover"><x-icons.edit-pencil></x-icons.edit-pencil></a>
</div>