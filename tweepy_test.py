import tweepy

consumer_key='uYBQFBErHqOYxm9i4G89cZ0lp'
consumer_secret='BoPD7RV5G0DbnZFHECtxUXmMaqsolFvqQgHOgMkhTMsi0Q2gbn'
access_token_key='821258528891379714-rKD7FYCgCZkROQhTgVKMZD90JttQsdK'
access_token_secret='U6UivcJZakmtrqyDYEzDxSDXEqN3t7hpy3LsF10Yu6W6P'
auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token_key, access_token_secret)

api = tweepy.API(auth)

word = "#デザイナーと繋がりたい"#"Progate"
set_count = 100
search_results = api.search(q=word, count=set_count)

for result in search_results:
    username = result.user._json['screen_name']
    user_id = result.id
    print("ユーザーID："+str(user_id))
    user = result.user.name
    print("ユーザー名："+user)
    tweet = result.text
    print("ユーザーのコメント："+tweet)

    try:
        api.create_favorite(user_id)
        # api.create_friendship(username)
        print(user+"を「いいね」をしました\n\n")
    except:
        print(user+"はもう[いいね]してます\n\n")
変更

test