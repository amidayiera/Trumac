 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/"><?php echo e(config('app.name','TrumacWaters')); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/trumacwaters/public">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="/trumacwaters/public/services">Services</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/trumacwaters/public/posts">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/trumacwaters/public/posts/create">Insert new products</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/trumacwaters/public/about">About</a>
            </li> 
    </ul>
  </div>
</nav>

 <?php /**PATH C:\xampp\htdocs\trumacwaters\resources\views/inc/navbar.blade.php ENDPATH**/ ?>