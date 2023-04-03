@extends('admin.layouts.default')

@section('heading')
    <h1>WpPost Model Pagination Example</h1>
@endsection

@section('content')
    <table class="wp-list-table widefat striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Modified</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        <ul>
            @foreach($posts as $post)
                <tr>
                    <td class="column-primary">
                        {{ $post->ID }}
                    </td>
                    <td>
                        {{ $post->post_title }}
                    </td>
                    <td>
                        {{ $post->post_modified }}
                    </td>
                    <td>
                        {{ $post->author->display_name }}
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <div class="tablenav bottom alignleft">
        {!! $posts->links('pagination.wp') !!}
    </div>
@endsection

