
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ str($post->content)->words(8) }}</td>
        <td>
            <button type="button" wire:click="$parent.delete({{$post->id}})" wire:confirm="Are you sure you want to delete this post?">Delete</button>
        </td>
      </tr>

