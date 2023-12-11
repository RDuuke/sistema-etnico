<div class="flex justify-end items-center space-x-2">
    <a href="{{ route('dashboard.community-users.delete', [ 'id' => $id ]) }}" class="mr-1 hover:text-project-error disabled"><x-icons.delete-trash></x-icons.delete-trash></a>
    <a href="{{ route('dashboard.census.edit', [ 'community_id' => $community_id, 'id' => $id ]) }}" class="mr-1 hover:text-project-icon-hover"><x-icons.edit-pencil></x-icons.edit-pencil></a>
</div>