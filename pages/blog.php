<section id="blog">
<br>
<div  class="container">
  <h1 class="blog-title">Latest blog post</h1>

  <ul>
  <!-- <li class="post">
      <div class="post__excerpt card">
        <header class="card__header">
          <h2>Blog title</h2>
          <time class="card__date" datetime="2018-08-26">Aug 26, 2018</time>
        </header>
        <p>Simple one sentence hook line to draw in interest to your blog post.</p>
        <div class="card__cta">
        <a id="btn-abrir-popup">Read more</a>          
            <div id="overlay" class="overlay">
              <div id="popup" class="popup">
                <a href="javascript:void(0);" id="btn-cerrar-popup" class="btn-cerrar-popup">
                  <i class="fa fa-times"></i>
                </a>
                
                <h3>
                  Blog title
                </h3>
                
                <p>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.<br>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.
                </p>
              </div>	
            </div>
        </div>
      </div>
      <img class="post__image" src="http://bit.ly/2P146p3-unplash" alt="">
    </li>
    <li class="post">
      <div class="post__excerpt card">
        <header class="card__header">
          <h2>Blog title</h2>
          <time class="card__date" datetime="2018-08-26">Aug 26, 2018</time>
        </header>
        <p>Simple one sentence hook line to draw in interest to your blog post.</p>
        <div class="card__cta">
          <a id="btn-abrir-popup">Read more</a>          
            <div id="overlay" class="overlay">
              <div id="popup" class="popup">
                <a href="javascript:void(0);" id="btn-cerrar-popup" class="btn-cerrar-popup">
                  <i class="fa fa-times"></i>
                </a>
                
                <h3>
                  Blog title
                </h3>
                
                <p>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.<br>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.
                </p>
              </div>	
            </div>
        </div>
      </div>
      <img class="post__image" src="http://bit.ly/source_unsplash" alt="">
    </li> -->
    <li class="post">
      <div class="post__excerpt card">
        <header class="card__header">
          <h2>Blog title</h2>
          <time class="card__date" datetime="2018-08-26">Aug 26, 2018</time>
        </header>
        <p>Simple one sentence hook line to draw in interest to your blog post.</p>
        <div class="card__cta">
        <a id="btn-abrir-popup">Read more</a>          
            <div id="overlay" class="overlay">
              <div id="popup" class="popup">
                <a href="javascript:void(0);" id="btn-cerrar-popup" class="btn-cerrar-popup">
                  <i class="fa fa-times"></i>
                </a>
                
                <h3>
                  Blog title
                </h3>
                
                <p>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.<br>
                Simple one sentence hook line to draw in interest to your blog post.Simple one 
                sentence hook line to draw in interest to your blog post.Simple one sentence hook
                line to draw in interest to your blog post.
                </p>
              </div>	
            </div>
        </div>
      </div>
      <img class="post__image" src="https://bit.ly/2Bxshb7"alt="">
    </li>
  </ul>
</div>
</section>
<style>
// Layout
$container-padding: 24px;
$caret-size: 20px;

// Fonts
$body-font: 'Helvetica Neue', Helvetica, Arial, sans-serif;
$heading-font: 'Montserrat', sans-serif;

// Colors
$document-bg: #1D1B1C;
$card-bg: #4F4F4F;
$accent: #B4A677;
$accent-light: #D6C385;

.post h1, h2, a {
  font-family: $heading-font;
  text-transform: uppercase;
}

.blog-title{
    text-align: center;
    font-family: 'Cherry Swash';
    font-size: 3.0rem;
}
.post h1, h2 {
  margin-top: 0;
  letter-spacing: 0.2em;
}

.post h1 {
  margin-bottom: 3rem;
  text-align: center;
}

.post h2 {
  font-size: 1.2em;
}

.card__cta {
  cursor: pointer;
}

.post a {
  text-decoration: none;
  color: $accent;
  
  &:hover {
    color: $accent-light;
  }
}

.post ul {
  list-style: none;
  padding: 0;
}

.post img {
  width: 100%;
}

.container {
  width: calc(100% - #{$container-padding * 2});
  margin-left: auto;
  margin-right: auto;
}

.post {
  + .post {
    margin-top: 2rem;
  }
  
  &__excerpt {
    position: relative;
  }
}

.post .card {
  background-color: $card-bg;
  padding: 2rem;
  
  &:before {
    content: '';
    display: block;
    width: $caret-size;
    height: $caret-size;
    background-color: $card-bg;
    position: absolute;
    transform: rotate(45deg);
    bottom: #{-$caret-size * 0.5};
  }
  
  &__header {
    padding-bottom: 1rem;
    border-bottom: 1px solid white;
  }
  
  &__date {
    text-transform: uppercase;
    letter-spacing: 0.3em;
  }
}

@media (min-width: 768px) {
  .container {
    width: 60%;
  }
  
  .post {
    display: flex;
    align-items: center;
    padding-bottom: 10px;
    
    &__excerpt {
      width: 45%;
    }
    
    &__image {
      width: 55%;
    }
    
    &:nth-child(odd) {
      .post__excerpt {
        margin-right: -4rem;
      }
      
      .card {
        &:before {
          right: #{-$caret-size * 0.5};
        }
      }
      
      .card__header,
      .card__cta {
        text-align: right;
      }
    }
    
    &:nth-child(even) {
      .post__excerpt {
        order: 1;
        margin-left: -4rem;
      }
      
      .post .card {
        &:before {
          left: #{-$caret-size * 0.5};
        }
      }
    }
  }
  
  .post .card {
    &:before {
      bottom: auto;
    }
  }
}


/* Popup */
.overlay {
	align-items: center;
	background-color: rgba(0, 0, 0, 0.3);
	bottom: 0;
	display: flex;
	justify-content: center;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
	visibility: hidden;
}

.overlay.active {
	visibility: visible;
}

.popup {
	background-color: #f8f8f8;
	border-radius: 3px;
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.3);
	font-family: 'Montserrat', sans-serif;
	max-width: 90%;
	opacity: 0;
	padding: 20px;
	transform: scale(0.7);
	transition: opacity 0.3s ease,
							transform 0.3s ease;
	width: 500px;
}

.popup .btn-cerrar-popup {
	display: block;
	color: #bbbbbb;
	line-height: 16px;
	text-align: right;
	transition: color 0.3s ease;
}

.popup .btn-cerrar-popup:hover,
.popup .btn-cerrar-popup:focus,
.popup .btn-cerrar-popup:active {
	color: #000000;
}

.popup h3 {
	font: 600 20px 'Montserrat', sans-serif;
	margin-bottom: 10px;
	text-transform: uppercase;
  text-align: center;
}

.popup p {
	margin-bottom: 40px;
  font-family: sans-serif;
}

/* Animaciones */
.popup.active {
	opacity: 1;
	transform: scale(1);
}

.popup.active h3 {
	animation: entrada-titulo 0.8s 0.5s ease forwards;
	opacity: 0;
	transform: translateY(-25px);
}

.popup.active p {
	animation: entrada-subtitulo 0.8s 0.5s ease forwards;
	opacity: 0;
	transform: translateY(25px);
}

@keyframes entrada-titulo {
	to {
		opacity: 1;
		transform: translateY(0);
	}
}

@keyframes entrada-subtitulo {
	to {
		opacity: 1;
		transform: translateY(0);
	}
}

@keyframes entrada-inputs {
	to {
		opacity: 1;
	}
}

</style>


<script>
let btnAbrirPopup = document.getElementById('btn-abrir-popup'),
		overlay = document.getElementById('overlay'),
		popup = document.getElementById('popup'),
		btnCerrarpopup = document.getElementById('btn-cerrar-popup');


btnAbrirPopup.addEventListener('click', function() {
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarpopup.addEventListener('click', function() {
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
</script>