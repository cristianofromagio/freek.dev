@component('mail::message')
Hi,

welcome to the freek.dev newsletter.  Every two weeks you can expect some nice links to cool stuff on Laravel, PHP and JavaScript in your mailbox.

To thank you for subscribing I'd like to offer you a coupon which grants you a discount when purchasing one of these products that I have created:

- [Oh Dear](https://ohdear.app) get notify you when ever your website goes down. Unlike most other services, Oh Dear does not only monitor your homepage, but your entire website. It can notify you when you have broken links or mixed content. It will also monitor your SSL certificates and much more. The coupon offers you a discount of 5 EUR on your first bill.
- [The Laravel Package Training video course](https://laravelpackage.training): in this premium video course you'll learn how to create quality framework agnostic PHP and Laravel packages. We'll also source dive a couple of my packages together. I'm sure you will pick up some coding tricks! The coupon grants you a 5% discount.
- [Mailcoach](https://mailcoach.app): this is a premium Laravel packages that can help sending email campaigns of any size in an affordable way. The coupon grants you a 5% discount.

Here is the coupon code:

{{ config('coupons.subscribing') }}

If you already want to read some stuff, here are links to the latest newsletters:
@foreach($campaigns as $campaign)
- [{{ $campaign->subject }}]({{ $campaign->webviewUrl() }}) - sent on {{ $campaign->sent_at->format('jS F Y') }}
@endforeach

Here are some blog posts I recently published on [freek.dev](https://freek.dev):
@foreach($posts as $post)
- [{{ $post->title }}]({{ $post->url }})
@endforeach

By clicking [this link](https://twitter.com/intent/tweet?url=https%3A%2F%2Ffreek.dev%2Fnewsletter&text=I%27ve%20just%20signed%20up%20for%20the%20newsletter%20on%20Laravel%2C%20PHP%20and%20JavaScript%20by%20@freekmurze.%20You%20can%20sign%20up%20via%20this%20link%3A&hashtags=laravel%2C%20php%2C%20javascript) you can share your subscription with your followers on Twitter.

Thanks for subscribing!


Freek
@endcomponent
