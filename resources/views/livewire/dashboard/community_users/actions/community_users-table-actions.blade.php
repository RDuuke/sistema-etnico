<div class="flex justify-end items-center space-x-2">
    @if($enable == $enable_user)
        <a href="{{route('dashboard.community-users.disabled', ['id' => $id])}}" class="mr-1 hover:text-project-error"><x-icons.disabled-user></x-icons.disabled-user></a>
    @else
        <a href="{{route('dashboard.community-users.enable', ['id' => $id])}}" class="mr-1 hover:text-project-icon-hover"><x-icons.enable-user></x-icons.enable-user></a>
    @endif
    <a href="{{ route('dashboard.community-users.delete', [ 'id' => $id ]) }}" class="mr-1 hover:text-project-error"><x-icons.delete-trash></x-icons.delete-trash></a>
    <a href="{{ route('dashboard.community-users.edit', [ 'id' => $id ]) }}" class="mr-1 hover:text-project-icon-hover"><x-icons.edit-pencil></x-icons.edit-pencil></a>
</div>