@extends('admin.layouts.app')
@section('admin-content')
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $user->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->phone }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->status }}
                    </td>
                    <td class="py-4 px-6 space-x-1.5">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <button  onclick="deleteRow({{ @$user->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</button>
                        <form id="row-delete-form{{ @$user->id }}" method="POST"
                              class="hidden"
                              action="{{ route('admin.users.destroy', @$user->id) }}">
                            @method('DELETE')
                            @csrf()
                        </form>
                        <a href="{{ route('admin.users.show', $user) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if (count(@$users))
            {{ @$users->appends(['keyword' => request('keyword'), 'perPage' => request('perPage')])->links() }}
        @else
            <div class="text-center">No Users found</div>
        @endif

    </div>
@endsection
@push('scripts')
    <script>
        function deleteRow(id) {
            if (confirm('Are you sure to delete')){
                document.getElementById('row-delete-form' + id).submit();
            }
        }
    </script>
@endpush
