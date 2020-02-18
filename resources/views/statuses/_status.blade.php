<li class="media mt-4 mb-4">
  <a href="{{ route('users.show', $user->id )}}">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar"/>
  </a>
  <div class="media-body">
    <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
    {{ $status->content }}
  </div>

  @can('destroy', $status)
    <form action="{{ route('statuses.destroy', $status->id) }}" method="POST" onsubmit="return confirm('Do you really want to delete this story?');">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
  @endcan
</li>

<!--
  ————————————————
  Original Author：Summer
  Reference: https://learnku.com/courses/laravel-essential-training/6.x/according-to-weibo/5495
-->
