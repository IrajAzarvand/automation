@extends('layouts.DashboardLayout')

@section('contents')
{{--
<!-- Not Authorized -->
<div class="container-xxl container-p-y" style="margin: auto; width: 50%;">
    <div class="misc-wrapper">
        <h1 class="mb-2 mx-2 secondary-font">شما مجاز نیستید!</h1>
        <p class="mb-4 mx-2">شما مجوز دسترسی به این صفحه را ندارید. به خانه بروید!!</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">بازگشت به خانه</a>
        <div class="mt-5 ">
            <img src="../../assets/img/illustrations/girl-hacking-site-light.png" alt="page-misc-error-light"
                width="450" class="img-fluid" data-app-light-img="illustrations/girl-hacking-site-light.png"
                data-app-dark-img="illustrations/girl-hacking-site-dark.png">
        </div>
    </div>
</div>
<!-- /Not Authorized --> --}}


<style>
    ::-webkit-scrollbar {
        display: none;
    }

    /* html, */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background: black;
        color: lightgreen;
        direction: ltr;

    }

    .container {
        display: block;
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
        font-family: monospace;
        direction: ltr;

    }

    .container span {
        display: inline-block;
        width: 50px;
        height: 20px;
        direction: ltr;

    }
</style>

<div dir="ltr" class="container"></div>


<script>
    (function(){
  var i = 0;
  var speed = 17;
  var txt = 'struct group_info init_groups = { .usage = ATOMIC_INIT(2) };<br><br>struct group_info *groups_alloc(int gidsetsize){<br><br><span></span>struct group_info *group_info;<br><br><span></span>int nblocks;<br><br><span></span>int i;<br><br><br><br><span></span>nblocks = (gidsetsize + NGROUPS_PER_BLOCK - 1) / NGROUPS_PER_BLOCK;<br><br><span></span>/* Make sure we always allocate at least one indirect block pointer */<br><br><span></span>nblocks = nblocks ? : 1;<br><br><span></span>group_info = kmalloc(sizeof(*group_info) + nblocks*sizeof(gid_t *), GFP_USER);<br><br><span></span>if (!group_info)<br><br><span></span><span></span>return NULL; <br><br><span>Unautorized Access, Leave this page right now. </span>';

  function hacker() {
    if (i < txt.length) {

      var cc = txt.charAt(i);
      if (cc === '<') {
        while (txt.charAt(i+1) !== '>') {
          i++;
          cc += txt.charAt(i);
        }
        i++;
        cc += txt.charAt(i);
      }
      document.querySelector(".container").innerHTML += cc;
      i++;
      setTimeout(hacker, speed);
    }
    window.scrollTo(0, document.body.scrollHeight);
  }
  hacker();
})();
</script>
@endsection