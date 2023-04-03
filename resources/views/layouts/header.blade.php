<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a 
            class="nav-link {{ request()->is('/') ? 'active' : '' }}" 
            href="/">Home
          </a>
        </li>
        <li class="nav-item">
          <a 
          class="nav-link {{ request()->is('about') ? 'active' : '' }}" 
            href="about">
            About
          </a>
        </li>
        <li class="nav-item">
          <a 
          class="nav-link {{ request()->is('posts') ? 'active' : '' }}" 
            href="posts">
            Posts
          </a>
        </li>

        <li class="nav-item">
          <a 
          class="nav-link {{ request()->is('foods') ? 'active' : '' }}" 
            href="foods">
            Foods
          </a>
        </li>

      </ul>
    </div>      
  </nav>