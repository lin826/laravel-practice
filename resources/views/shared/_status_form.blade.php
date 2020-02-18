<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea class="form-control" rows="3" placeholder="Tell a story..." name="content">{{ old('content') }}</textarea>
  <div class="text-right">
      <button type="submit" class="btn btn-primary mt-3">Publish</button>
  </div>
</form>

<!--
  ————————————————
  Original Author：Summer
  Reference: https://learnku.com/courses/laravel-essential-training/6.x/according-to-weibo/5495
-->
