<!DOCTYPE html>
<html>
  <head>
    <title>SVG tween line example</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.23.0/polyfill.min.js"></script>
    <style>

      html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video {margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;}/* HTML5 display-role reset for older browsers */article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display: block;}body {line-height: 1;}ol, ul {list-style: none;}blockquote, q {quotes: none;}blockquote:before, blockquote:after,q:before, q:after {content: '';content: none;}table {border-collapse: collapse;border-spacing: 0;}a {text-decoration:none;color:inherit;}

      .container {
        width: 100%;
        height: 100vh;
        position: relative;
      }

      .foreground svg {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        max-height: 75vh;
        transform: translate(-50%, -50%);
      }

      .details {
        stroke-width: 5;
      }

      /* text */

      .text {
        position: absolute;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
      }

      .hero {
        position: relative;
        margin: -55px 0px -50px -30px;
      }

      .hero h1 {
        font-size: 30em;
      }

      .body {
        font-size: 3em;
        line-height: 1.2em;
        max-width: 80%;
      }

      @media (max-width: 950px) {
        .hero {
          position: relative;
          margin: -55px 0px -30px -20px;
        }

        .hero h1 {
          font-size: 20em;
        }

        .body {
          font-size: 2em;
          line-height: 1.2em;
        }
      }

      @media (max-width: 650px) {
        .hero {
          position: relative;
          margin: -55px 0px -20px -15px;
        }

        .hero h1 {
          font-size: 15em;
        }

        .body {
          font-size: 1.5em;
          line-height: 1.2em;
        }
      }

      @media (max-width: 470px) {
        .hero {
          position: relative;
          margin: -55px 0px -20px -10px;
        }

        .hero h1 {
          font-size: 13em;
        }

        .body {
          font-size: 1.5em;
          line-height: 1.2em;
        }
      }

      @media (max-width: 420px) {
        .hero {
          position: relative;
          margin: -55px 0px -20px -15px;
        }

        .hero h1 {
          font-size: 12em;
        }

        .body {
          font-size: 1.5em;
          line-height: 1.2em;
        	max-width: 100%;

        }

        .details {
          stroke-width: 3;
        }
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="text">
        <div class="hero">
         <h1><?php bloginfo('name'); ?></h1>
        </div>
        <div class="body">
        	<?php bloginfo('description'); ?>
        </div>
      </div>
      <div class="foreground">
        <svg
          preserveAspectRatio="none"
          stroke-dasharray="15, 5"
          x="0"
          y="0"
          width="100%"
          viewBox="0 0 1056.24 630.48"
        >
          <path
            class="details"
            fill="none"
            id="path"
            stroke="rgb( 255, 24, 0 )"
            vector-effect="non-scaling-stroke"
          />
        </svg>
      </div>
    </div>
  </body>
  <script src="why.js"></script>
</html>
