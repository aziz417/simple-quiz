@extends('admin.layouts.app')
@section('admin-content')
    <div class="w-full">
        <h1 class="text-xl">Details</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <td scope="col" class="py-3 px-6">
                    {{@$user->name}}
                </td>
            </tr>
            <tr>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <td scope="col" class="py-3 px-6">
                    {{@$user->email}}
                </td>
            </tr>
            <tr>
                <th scope="col" class="py-3 px-6">
                    Phone
                </th>
                <td scope="col" class="py-3 px-6">
                    {{@$user->phone}}
                </td>
            </tr>
            <tr>
                <th scope="col" class="py-3 px-6">
                    CV Link

                </th>
                <td scope="col" class="py-3 px-6">
                    <a target="_blank" href="{{@$user->cv_link}}" class="text-blue-500">link</a>
                </td>
            </tr>
            <tr>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <td scope="col" class="py-3 px-6">
                   <span class="bg-red-200 p-1 rounded">{{@$user->status}}</span>
                </td>
            </tr>
            </thead>
        </table>
    </div>
@endsection
