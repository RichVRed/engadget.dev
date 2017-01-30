<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('provider')->nullable();
            $table->string('oauth_token')->nullable();
            $table->string('oauth_token_secret')->nullable();
            $table->string('provider_id')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authentication');
    }

    static protected $OAuthProviders = [
                '23andme',
                '37Signals',
                '500px',
                'AngelList',
                'App.net',
                'Asana',
                'Battle.net',
                'Bit.ly',
                'Box',
                'Buffer',
                'CampaignMonitor',
                'Cheddar',
                'Coinbase',
                'ConstantContact',
                'Coursera',
                'Dailymile',
                'Dailymotion',
                'Dataporten',
                'Deezer',
                'DigitalOcean',
                'Discord',
                'Disqus',
                'Douban',
                'Dribbble',
                'Dropbox',
                'Envato',
                'Etsy',
                'Eventbrite',
                'Everyplay',
                'EyeEm',
                'Fitbit',
                'Flickr',
                'Foursquare',
                'GitLab',
                'Goodreads',
                'Google+',
                'Heroku',
                'Hitbox',
                'Human API',
                'Imgur',
                'Instagram',
                'Jawbone',
                'Jira',
                'Kakao',
                'LinkedIn',
                'MailChimp',
                'Medium',
                'Meetup',
                'Microsoft Azure',
                'Microsoft Live',
                'Mixcloud',
                'Moves',
                'Naver',
                'Patreon',
                'PayPal',
                'PayPal Sandbox',
                'Paymill',
                'Pinterest',
                'Podio',
                'Pushbullet',
                'QQ',
                'Rdio',
                'Readability',
                'RedBooth',
                'Reddit',
                'RunKeeper',
                'SalesForce',
                'SharePoint',
                'Slack',
                'SoundCloud',
                'Spotify',
                'StackExchange',
                'Steam',
                'StockTwits',
                'Strava',
                'Stripe',
                'Trakt',
                'Trello',
                'Tumblr',
                'Twitch',
                'Twitter',
                'Uber',
                'VKontakte',
                'Venmo',
                'VersionOne',
                'Vimeo',
                'Weibo',
                'Weixin',
                'Weixin Web',
                'WordPress',
                'Xing',
                'Yahoo',
                'Yammer',
                'Yandex',
                'YouTube',
                'Zendesk',
                'deviantART',
                'xREL',
            ];
}
