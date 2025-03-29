<div>
<h2>Show Posts</h2>

<table>
    <thead>
        <tr>
        <th>Title</th>
        <th>Content</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      <tr wire:key="{{ $post->id }}">
        <td>{{ $post->title }}</td>
        <td>{{ str($post->content)->words(8) }}</td>
        <td>
            <button type="button" wire:click="delete({{$post->id}})" wire:confirm="Are you sure you want to delete this post?">Delete</button>
        </td>
      </tr>
      @endforeach
      
</table>
</div>
