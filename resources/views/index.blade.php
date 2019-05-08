<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Teamwork</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Welcome</a></li>
                <li><a href="#stream">Stream</a></li>
                <li><a href="#member">Members</a></li>
                <li><a href="#tournament">Tournaments</a></li>
                <li><a href="#join">Join US</a></li>
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
                <section>
                    <iframe src="https://player.twitch.tv/?channel=thaque20" frameborder="0" allowfullscreen="true"
                            scrolling="no" height="378" width="620"></iframe>
                </section>
                <section>
                    <iframe src="https://www.twitch.tv/embed/thaque20/chat" frameborder="0" scrolling="no"
                            height="378" width="350"></iframe>
                </section>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="member" class="wrapper style3 fade-up fullscreen">
        <div class="inner">
            <h2>Members</h2>
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
                <li><a href="#" class="button">Join US</a></li>
            </ul>
        </div>
    </section>

    <!-- Three -->
    <section id="tournament" class="wrapper style1 fade-up fullscreen">
        <div class="inner">
            <h1>Tournament is under construction!</h1>
            <p>Stay tuned.</p>
            <ul class="actions">
                <li><a href="#member" class="button scrolly">See our Members!</a></li>
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
                    <form method="post" action="{{ route('signup') }}">
                        @csrf
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
@if(Session::get('action') == "user-signup" && Session::get('result') == "success"):
    <script>
        swal("Congratulations!", "You are now a proud member of Teamwork!", "success");
    </script>
@endif

</body>
</html>