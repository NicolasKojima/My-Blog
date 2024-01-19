<style>
  .nav-link {
    padding: 4px 20px;
    font-family: 'Lato', sans-serif;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    position: relative;
    transition: color 0.3s ease;
    right: 0;
  }

  .nav-link:hover {
    color: #fff;
  }

  .nav-link:hover::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 1.5px;
    background-color: white;
  }

  @media (max-width: 767px) {
    .nav-link {
      display: block;
      margin-bottom: 10px;
    }
  }

  /* Updated styles for spreading links from the right */
  .nav-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .nav-logo {
    max-width: 150px;
    height: auto;
    position: absolute;
    left:15px;
  }

  .nav-brand {
    margin-left: 20px;
    color: white;
  }

  @media (max-width: 767px) {
    .nav-brand {
      margin-left: 0;
    }
  }

</style>

<nav class="flex items-center justify-between flex-wrap p-6" style="background-color:#233142;">
  <div class="nav-container">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"><path d="m8 3 4 8 5-5 5 15H2L8 3z"></path></svg>
    <div class="nav-brand">
      <span class="font-semibold text-xl tracking-tight" style="font-size:30px;">Nicolas Kojima</span>
    </div>

    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
  </div>

  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <!-- ... your existing links ... -->
    </div>
    <div>
      <a href="https://13.231.39.214/" class="block lg:inline-block lg:mt-0 text-teal-200 nav-link">
        Homepage
      </a>
    </div>
    <div>
      <a href="https://13.231.39.214/nicolaskojima/" class="block lg:inline-block lg:mt-0 text-teal-200 nav-link">
        Website
      </a>
    </div>
    <div>
      <a href="https://13.231.39.214/PMS1/public/login" class="block lg:inline-block lg:mt-0 text-teal-200 nav-link">
        PMS Project
      </a>
    </div>
    <div>
      <a href="https://github.com/NicolasKojima" class="block lg:inline-block lg:mt-0 text-teal-200 nav-link">
        Github
      </a>
    </div>
    <div>
      <a href="#responsive-header" class="block lg:inline-block lg:mt-0 text-teal-200 nav-link">
        Contact
      </a>
    </div>
  </div>
</nav>
