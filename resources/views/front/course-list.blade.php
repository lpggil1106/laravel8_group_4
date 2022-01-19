@extends('layouts.template2')

@section('title', 'TINGS Courses')

@section('css')
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.css" integrity="sha512-fSWkjL6trYj6KvdwIga30e8V4h9dgeLxTF2q2waiwwafEXD+GXo5LmPw7jmrSDqRun9gW5KBR+DjvWD+5TVr8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/course-list.css') }}">
@endsection

@section('main')
    <div id="course-list">
        <div class="section1">
            <div class="title">
                <span>課程</span>
                <div class="english">Courses</div>
            </div>
            <div class="image">
                <div class="banner"></div>
                <div class="small-img"></div>
            </div>
        </div>
        <!-- course -->
        <div class="course">
            <ul class="tabs">
                <a href="{{ route('front.course-list', 'category_id=0') }}" class="tab">所有</a>
                @foreach ($courseCategories as $courseCategory)
                    <li class="tab">
                        <a
                            href="{{ route('front.course-list', 'category_id=' . $courseCategory->id) }}">{{ $courseCategory->name }}</a>
                    </li>
                    {{-- <a href="{{route('front.course-list','category_id='.$courseCategory->id)}}" class="tab">{{$courseCategory->name}}</a> --}}
                @endforeach
            </ul>
            <div class="cards">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-12 col-12 mb-5">
                            <a href="{{ route('front.course-content', ['id' => $product->id]) }}" class="card"
                                style="border: none">
                                <img src="{{ Storage::url($product->image_url) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="text-muted">{{ $product->productCategories->name }}</div>
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <div class="fee-and-cart">
                                        <span class="fee">${{ $product->price }}</span>
                                        <i class="fas fa-shopping-cart icon"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.js" integrity="sha512-GDiDlK2vvO6nYcNorLUit0DSRvcfd7Vc0VRg7e3PuZcsTwQrJQKp5hf8bCaad+BNoBq7YMH6QwWLPQO3Xln0og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // hides header when scrolling down; shows header when up
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector('header').style.top = "0";
            } else {
                document.querySelector('header').style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        }

        @if (session('message'))
        Swal.fire({
            icon: 'error',
            title: '{{session('message')}}',
        })
        @endif
    </script>
@endsection
