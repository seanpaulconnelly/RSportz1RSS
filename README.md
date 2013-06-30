## Overview
Media screen implementation of RSS feeds offered up by RSportz 1.0.  Also hits up Instagram and Twitter for a #firstopic and #aautopic.  All sections will are controlled with this library with exception to the date/time, which will be operated via screen software.

---

### Layout Guide
All areas should cycle independently of each other via URL page request.  Schedule/Results cycle should leapfrog the Instagram/Twitter cycle at a timed interval:

1. SCHEDULE and TWITTER load
2. RESULTS loads, TWITTER stays
3. RESULTS stays, INSTAGRAM loads
4. SCHEDULE loads, INSTAGRAM stays
5. SCHEDULE stays, TWITTER loads
6. RESULTS loads, TWITTER stays
7. RESULTS stays, INSTAGRAM loads
8. 9, 10, 11, 12, etc. etc

![Layout Guide](https://raw.github.com/seanpaulconnelly/joscreens/master/layout-guide/screen-layout.png)

---

### Live URLs:
##### Junior Olympics of Inline Hockey
* http://seanconnelly.me/rsportz/joscreens/jos/schedule/
* http://seanconnelly.me/rsportz/joscreens/jos/results/
* http://seanconnelly.me/rsportz/joscreens/jos/artwork/
* http://seanconnelly.me/rsportz/joscreens/jos/instagram/
* http://seanconnelly.me/rsportz/joscreens/jos/twitter/

##### FIRS World Championships
* http://seanconnelly.me/rsportz/joscreens/firs/schedule/
* http://seanconnelly.me/rsportz/joscreens/firs/results/
* http://seanconnelly.me/rsportz/joscreens/firs/artwork/
* http://seanconnelly.me/rsportz/joscreens/firs/instagram/
* http://seanconnelly.me/rsportz/joscreens/firs/twitter/

---

Forked from https://github.com/RSportz/RSportz1RSS

Help on the new Twitter 1.1 API from https://github.com/jonhurlock/Twitter-Application-Only-Authentication-OAuth-PHP

Help with Instagram from https://github.com/sesser/Instaphp plus a little hackery
