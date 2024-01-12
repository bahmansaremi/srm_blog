@extends('layout.master')

@section('title')
    catgories
@endsection

@section('content')
    <br><br>

    <div class="row">
        <div class="col-sm-6">
            <br>
            <h2>List of users</h2>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Post count</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
{{--                <tbody>--}}

{{--                @if($users)--}}
{{--                    @foreach($users as $key => $user)--}}
{{--                        <tr>--}}
{{--                            <td class="text-center">{{$key + 1}}</td>--}}
{{--                            <td>{{$user->title}}</td>--}}
{{--                            <td>--</td>--}}
{{--                            @if($user->id != 1)--}}
{{--                                <td class="td-actions text-right">--}}
{{--                                    <a href="{{route('categories.edit',$category->id)}}">--}}
{{--                                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">--}}
{{--                                            <i class="now-ui-icons ui-2_settings-90"></i>--}}
{{--                                        </button>--}}
{{--                                    </a>--}}
{{--                                    <form class="d-inline-block" method="POST" action="{{route('categories.destroy', $category->id)}}">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon" onclick="return confirm('Are you sure you want to delete it?')">--}}
{{--                                            <i class="now-ui-icons ui-1_simple-remove"></i>--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            @endif--}}

{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--                </tbody>--}}
            </table>
        </div>
    </div>


@endsection
