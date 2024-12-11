@extends('layout.app') 
@section('content')
<video class="video-background" autoplay muted loop>
    <source src="{{ asset('videos/video_bg_home.mp4') }}" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
</video>
<div class="titlehome">
    
</div>

<div class="deblog">
    <div class="deblog_top">
        <div class="deblog_title">{{ $article->title }}</div>
        <div class="deblog_subtitle">by {{ $article->author }} in on {{ $article->date }}</div>
    </div>
    <div class="deblog_main">
        <img src="{{ asset('images/'.$article->image) }}" alt="">
        <div class="deblog_main_content">
            <p>{!! ($article->content) !!}</p>
        </div>
        @if ($article->documents && $article->documents->count() > 0)
            @foreach ($article->documents as $document)
            <iframe src="{{ asset('files/'.$document->url) }}" width="60%" height="600px"></iframe>
            @endforeach
        @else
            <p>Không có tài liệu nào.</p>
        @endif
    
    </div>

    <div class="deblog_bottom">
        <div class="deblog_bottom_title">Bài viết liên quan</div>
        <div class="deblog_bottom_grid">

          @foreach ($relatedArticles as $relatedArticle)
            <a href="{{ route('blog.detail', ['id' => $relatedArticle->id]) }}" class="blog_main_list_item">
              <img src="{{ asset('images/'.$relatedArticle->image) }}" alt="{{ $relatedArticle->title }}" class="blog_main_list_item_img">
              <div class="blog_main_list_item_content">
                <div class="blog_main_list_item_content_author">
                  <span>{{ $relatedArticle->author }}</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                    <circle cx="4" cy="4.5" r="4" fill="#03A600"/>
                  </svg>
                </div>
                <div class="blog_main_list_item_content_title">{{ $relatedArticle->title }}</div>
                <div class="blog_main_list_item_content_label">
                  @if ($relatedArticle->topics->count() > 0)
                  @foreach ($relatedArticle->topics as $topic)
                    <div class="blog_main_list_item_content_label_item">{{ $topic->name }}</div>
                  @endforeach
                @endif
                  <div class="blog_main_list_item_content_label_item">Tin tức</div>
                </div>
                <div class="blog_main_list_item_content_status">
                  <p>{{ $relatedArticle->views }} lượt xem</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewBox="0 0 3 3" fill="none">
                    <circle cx="1.5" cy="1.5" r="1.5" fill="#858585"/>
                  </svg>
                  <p>{{ \Carbon\Carbon::parse($relatedArticle->date)->format('d/m/Y') }}</p>
                </div>
              </div>
            </a>
          @endforeach

            

        </div>
    </div>
</div>

@endsection