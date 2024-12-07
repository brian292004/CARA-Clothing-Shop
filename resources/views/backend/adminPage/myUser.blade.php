@extends('adminLayout')
@section('body')
<div class="head-title">
    <div class="left">
        <h1>Dashboard</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Home</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" >{{ config('apps.user.title') }}</a>
            </li>    
        </ul>
    </div>
</div>
@if (session('message'))
    <div class="alert">
        {{ session('message') }}
    </div>
@endif
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Accounts</h3>
            <form action="{{ route('admin.searchUser') }}" method="GET">
                <div class="search">
                    <input type="text" name="keyword" placeholder="Search...">
                    <button type="submit" class="search"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
            <a href="{{route('admin.addUser')}}" class="add-link">Add Users</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="text-align: center" >Edit</th>
                </tr>
            </thead>
            <tbody>
            @if ($users && count($users) > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-center">
                            <a href="{{route('admin.edit',['id'=>$user->id]) }}" class="edit-link">Edit</a>
                            <a href="{{route('admin.delete',['id'=>$user->id]) }}" class="delete-link">Delete</a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4">No users found.</td>
                    </tr>
            @endif
            </tbody>
        </table>
        <div class="post-pagination" >
            <ul class="pagination"  >
                {{ $users->links('pagination::bootstrap-4') }}
            </ul>          
        </div >
    </div>
</div>
@endsection