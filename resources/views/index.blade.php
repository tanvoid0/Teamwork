<!DOCTYPE HTML>
<html>
<head>
    <title>Teamwork</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
    {{--Loader--}}
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fakeLoader.min.css') }}">
</head>
<body class="is-preload">
<div class="fakeloader"></div>
<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Welcome</a></li>
                <li><a href="#stream">Stream</a></li>
                <li><a href="#admin">Admins</a></li>
                <li><a href="#tournament">Tournaments</a></li>
                <li><a href="#join">Join US</a></li>
                <li><a href="{{ url('login') }}" target="_blank">Login</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>Teamwork</h1>
            <p>Together we win.</p>
            <ul class="actions">
                <li><a href="#stream" class="button scrolly">Watch Live!</a></li>
            </ul>
        </div>
    </section>

    <!-- One -->
    <section id="stream" class="wrapper style2 spotlights fullscreen">
        <div class="inner">
            <h2>Stream</h2>
            <p>Watch us live!</p>
            <div class="split style1">
                @if($stream->client == "youtube")
                <section>
                    {{--                Youtube--}}
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UCUCBVCgwxp0VdbRU3P-O7lA" frameborder="0" allowfullscreen></iframe>


                </section>
                @elseif($stream->client == "twitch")
                    <section>
                        <iframe src="https://player.twitch.tv/?channel=tanveerhoque" frameborder="0" allowfullscreen="true"
                                scrolling="no" height="378" width="620"></iframe>
                    </section>
                    <section>
                        <iframe src="https://www.twitch.tv/embed/tanveerhoque/chat" frameborder="0" scrolling="no"
                                height="378" width="350"></iframe>
                    </section>
                @endif
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="admin" class="wrapper style3 fade-up fullscreen">
        <div class="inner">
            <h2>Admin</h2>
            <p>Alone, everything is hard. But together, we acheived what we are today!</p>
            <div class="features">
                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Captain Rony</h3>
                </section>

                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Captain Darken</h3>
                </section>

                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Ramin</h3>
                </section>
                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Captain Beemo</h3>
                </section>
                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Captain Devil</h3>
                </section>
                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Silent Motivator</h3>
                </section>
                <section>
                    <span class="icon major fa-user"></span>
                    <h3>Tanveer Hoque</h3>
                </section>
            </div>
            <ul class="actions">
                <li><a href="{{ route('member.index') }}" target="_blank" class="button">View All Members</a></li>
            </ul>
        </div>
    </section>

    <!-- Three -->
    <section id="tournament" class="wrapper style1 fade-up fullscreen">
        <div class="inner">
            <h1>Tournament is under construction!</h1>
            <p>Stay tuned.</p>
            <ul class="actions">
                <li><a href="{{ route('member.index') }}" class="button scrolly">See our Members!</a></li>
            </ul>
        </div>
    </section>
    <!-- Join -->
    <section id="join" class="wrapper style1 fade-up">
        <div class="inner">
            <h2>Join US!</h2>
            <p>Prove your worth.</p>
            <div class="split style1">
                <section>
                    <form method="POST" action="{{ route('signup') }}">
                        {{ csrf_field() }}
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Your Name..." required/>
                            </div>
                            <div class="field half">
                                <label for="email">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone Number..." required/>
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Your primary Mail..." required/>
                            </div>
                            <div class="field half">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter Password..."  required/>
                            </div>

                            <div class="field half">
                                <label for="lolid">LoL Username</label>
                                <input type="text" name="lolid" id="lolid" placeholder="Your League client Username" required/>
                            </div>
                            <div class="field half">
                                <label for="messenger">Messenger ID</label>
                                <input type="text" name="messenger" id="messenger" placeholder="Your Messenger ID..."/>
                            </div>

                            <div class="field half">
                                <label for="lane1">Primary Role</label>
                                <select name="lane1" id="lane1" required>
                                    <option value="bot">Bottom</option>
                                    <option value="sp">Support</option>
                                    <option value="top">Top</option>
                                    <option value="mid">Mid</option>
                                    <option value="jg">Jungle</option>

                                </select>
                            </div>
                            <div class="field half">
                                <label for="lane2">Secondary Role</label>
                                <select name="lane2" id="lane2" required>
                                    <option value="bot">Bottom</option>
                                    <option value="sp">Support</option>
                                    <option value="top">Top</option>
                                    <option value="mid">Mid</option>
                                    <option value="jg">Jungle</option>

                                </select>
                            </div>

                            <div class="field">
                                <label for="address">Address (Optional)</label>
                                <textarea name="address" id="address" rows="5" placeholder="Enter address..."></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><a href="" class="button submit">Apply now</a></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Rony Saha</h3>
                            <span>017-25410478</span><br>
                            <a href="mailto:ronysaha51@gmail.com">ronysaha51@gmail.com</a>
                        </li>
                        <li>
                            <h3>Mir Bijoy</h3>
                            <span>016-44959606</span><br>
                            <a href="mailto:mirbijoy32@gmail.com">mirbijoy32@gmail.com</a>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <span>016-85534877</span><br>
                            <a href="mailto:thaque20@gmail.com">thaque20@gmail.com</a>
                        </li>
                        <li>
                            <h3>Social</h3>
                            <ul class="icons">
                                <li><a href="https://www.facebook.com/groups/796636070714959/" class="fa-facebook"><span class="label">Facebook</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>


</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(Session::get('action') == "member" && Session::get('result') == "success"):
    <script>
        swal("Congratulations!", "You are now a proud member of Teamwork!", "success");
    </script>
@endif

{{--Loader--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/fakeLoader.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $.fakeLoader({
            timeToHide:1200,
            bgColor:"#9b59b6",
            spinner:"spinner7"
        });
    });
</script>

<div class="fakeLoader"></div>
</body>
</html>