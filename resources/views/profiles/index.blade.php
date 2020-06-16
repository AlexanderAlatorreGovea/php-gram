@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-19/s150x150/90025187_207307250479876_1483144652184879104_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_ohc=-w8m-aOT-kwAX8PTVZ5&oh=26efff62706546d0d1885067d22c67cb&oe=5F0FFE0A" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>123</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                {{ $user->profile->url ?? 'No URL availble 😢' }}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img class="w-100" srcset="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/s150x150/30602449_1506602106117297_8073890302835818496_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=7ZU49tB3efwAX8jOUqc&oh=6301f59f7db759df8ce377f6ce343486&oe=5F1077EC 150w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/s240x240/30602449_1506602106117297_8073890302835818496_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=7ZU49tB3efwAX8jOUqc&oh=0ca9eec61163b335b2adfc17c9733d23&oe=5F0D5DEE 240w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/30602449_1506602106117297_8073890302835818496_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=7ZU49tB3efwAX8jOUqc&oh=683cd067d316613395783eaa128e80af&oe=5F0EC914 320w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/s480x480/30602449_1506602106117297_8073890302835818496_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=7ZU49tB3efwAX8jOUqc&oh=8c25298a73026f31a2fe905471033ed2&oe=5F0F4AD5 480w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/30602449_1506602106117297_8073890302835818496_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=7ZU49tB3efwAX8jOUqc&oh=923fad48c882edf5c5d2451d60d1b865&oe=5F0FA66F 640w" alt="">
            </div>
            <div class="col-4"> 
                <img class="w-100" srcset="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c130.0.820.820a/s150x150/25007243_385961155195585_2423184015411380224_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=5o46cV8FJnwAX_8M7x8&oh=dd9e023ad0f1e8e1f80f90f58bb27a30&oe=5F10DC93 150w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c130.0.820.820a/s240x240/25007243_385961155195585_2423184015411380224_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=5o46cV8FJnwAX_8M7x8&oh=e10f83c40fc8f5e43e782d05346b1578&oe=5F0E1359 240w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c130.0.820.820a/s320x320/25007243_385961155195585_2423184015411380224_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=5o46cV8FJnwAX_8M7x8&oh=5d0483b93abf46adc2d9377af316d406&oe=5F0F7DE3 320w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c130.0.820.820a/s480x480/25007243_385961155195585_2423184015411380224_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=5o46cV8FJnwAX_8M7x8&oh=0cc8a651f8ff5c048cdd856f2a16b505&oe=5F0EA7B9 480w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c130.0.820.820a/s640x640/25007243_385961155195585_2423184015411380224_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=5o46cV8FJnwAX_8M7x8&oh=176d42d63a37df8edc70e72352aca41e&oe=5F1058FB 640w" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" srcset="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c136.0.808.808a/s150x150/13249694_1178708492218267_110456459_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=BidHu6w4b2YAX91XEHf&oh=d45f707f146c6ee0fc8a62486ab9dfc9&oe=5F1088B6 150w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c136.0.808.808a/s240x240/13249694_1178708492218267_110456459_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=BidHu6w4b2YAX91XEHf&oh=ef1c5f7ca5bfd596a0ce8aa64f70c31e&oe=5F0D4CEB 240w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c136.0.808.808a/s320x320/13249694_1178708492218267_110456459_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=BidHu6w4b2YAX91XEHf&oh=778f2f82806c42f522e866c39e2be7b6&oe=5F108EB2 320w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/e35/c136.0.808.808a/s480x480/13249694_1178708492218267_110456459_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=BidHu6w4b2YAX91XEHf&oh=a1dc249b124e3fbd6ac3240d0b910893&oe=5F0F9F21 480w,https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c136.0.808.808a/s640x640/13249694_1178708492218267_110456459_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=BidHu6w4b2YAX91XEHf&oh=176a6f71fe9abc12460ac459b38aab38&oe=5F0D589B 640w" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
