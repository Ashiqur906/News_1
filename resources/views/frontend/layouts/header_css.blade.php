<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="This is the Google AMP Boilerplate.">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-dynamic-css-classes" src="https://cdn.ampproject.org/v0/amp-dynamic-css-classes-0.1.js"></script>
    <script async custom-element="amp-mega-menu" src="https://cdn.ampproject.org/v0/amp-mega-menu-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <!-- Import other AMP Extensions here -->
    
    
    <style amp-custom>
      /* add font  */
      @font-face {
          font-family: "Bitstream Vera Serif Bold";
          src: url("fonts/solaimanlipi.woff");
        }


    /* Add your styles here */
  
 :root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0d6efd;
  --bs-secondary: #6c757d;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #212529;
  --bs-body-bg: #fff;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  box-sizing: border-box;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }

  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-sm-0 {
    margin-left: 0;
  }

  .offset-sm-1 {
    margin-left: 8.33333333%;
  }

  .offset-sm-2 {
    margin-left: 16.66666667%;
  }

  .offset-sm-3 {
    margin-left: 25%;
  }

  .offset-sm-4 {
    margin-left: 33.33333333%;
  }

  .offset-sm-5 {
    margin-left: 41.66666667%;
  }

  .offset-sm-6 {
    margin-left: 50%;
  }

  .offset-sm-7 {
    margin-left: 58.33333333%;
  }

  .offset-sm-8 {
    margin-left: 66.66666667%;
  }

  .offset-sm-9 {
    margin-left: 75%;
  }

  .offset-sm-10 {
    margin-left: 83.33333333%;
  }

  .offset-sm-11 {
    margin-left: 91.66666667%;
  }

  .g-sm-0,
.gx-sm-0 {
    --bs-gutter-x: 0;
  }

  .g-sm-0,
.gy-sm-0 {
    --bs-gutter-y: 0;
  }

  .g-sm-1,
.gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-sm-1,
.gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-sm-2,
.gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-sm-2,
.gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-sm-3,
.gx-sm-3 {
    --bs-gutter-x: 1rem;
  }

  .g-sm-3,
.gy-sm-3 {
    --bs-gutter-y: 1rem;
  }

  .g-sm-4,
.gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-sm-4,
.gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-sm-5,
.gx-sm-5 {
    --bs-gutter-x: 3rem;
  }

  .g-sm-5,
.gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }

  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-md-0 {
    margin-left: 0;
  }

  .offset-md-1 {
    margin-left: 8.33333333%;
  }

  .offset-md-2 {
    margin-left: 16.66666667%;
  }

  .offset-md-3 {
    margin-left: 25%;
  }

  .offset-md-4 {
    margin-left: 33.33333333%;
  }

  .offset-md-5 {
    margin-left: 41.66666667%;
  }

  .offset-md-6 {
    margin-left: 50%;
  }

  .offset-md-7 {
    margin-left: 58.33333333%;
  }

  .offset-md-8 {
    margin-left: 66.66666667%;
  }

  .offset-md-9 {
    margin-left: 75%;
  }

  .offset-md-10 {
    margin-left: 83.33333333%;
  }

  .offset-md-11 {
    margin-left: 91.66666667%;
  }

  .g-md-0,
.gx-md-0 {
    --bs-gutter-x: 0;
  }

  .g-md-0,
.gy-md-0 {
    --bs-gutter-y: 0;
  }

  .g-md-1,
.gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-md-1,
.gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-md-2,
.gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-md-2,
.gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-md-3,
.gx-md-3 {
    --bs-gutter-x: 1rem;
  }

  .g-md-3,
.gy-md-3 {
    --bs-gutter-y: 1rem;
  }

  .g-md-4,
.gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-md-4,
.gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-md-5,
.gx-md-5 {
    --bs-gutter-x: 3rem;
  }

  .g-md-5,
.gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }

  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-lg-0 {
    margin-left: 0;
  }

  .offset-lg-1 {
    margin-left: 8.33333333%;
  }

  .offset-lg-2 {
    margin-left: 16.66666667%;
  }

  .offset-lg-3 {
    margin-left: 25%;
  }

  .offset-lg-4 {
    margin-left: 33.33333333%;
  }

  .offset-lg-5 {
    margin-left: 41.66666667%;
  }

  .offset-lg-6 {
    margin-left: 50%;
  }

  .offset-lg-7 {
    margin-left: 58.33333333%;
  }

  .offset-lg-8 {
    margin-left: 66.66666667%;
  }

  .offset-lg-9 {
    margin-left: 75%;
  }

  .offset-lg-10 {
    margin-left: 83.33333333%;
  }

  .offset-lg-11 {
    margin-left: 91.66666667%;
  }

  .g-lg-0,
.gx-lg-0 {
    --bs-gutter-x: 0;
  }

  .g-lg-0,
.gy-lg-0 {
    --bs-gutter-y: 0;
  }

  .g-lg-1,
.gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-lg-1,
.gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-lg-2,
.gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-lg-2,
.gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-lg-3,
.gx-lg-3 {
    --bs-gutter-x: 1rem;
  }

  .g-lg-3,
.gy-lg-3 {
    --bs-gutter-y: 1rem;
  }

  .g-lg-4,
.gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-lg-4,
.gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-lg-5,
.gx-lg-5 {
    --bs-gutter-x: 3rem;
  }

  .g-lg-5,
.gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }

  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-xl-0 {
    margin-left: 0;
  }

  .offset-xl-1 {
    margin-left: 8.33333333%;
  }

  .offset-xl-2 {
    margin-left: 16.66666667%;
  }

  .offset-xl-3 {
    margin-left: 25%;
  }

  .offset-xl-4 {
    margin-left: 33.33333333%;
  }

  .offset-xl-5 {
    margin-left: 41.66666667%;
  }

  .offset-xl-6 {
    margin-left: 50%;
  }

  .offset-xl-7 {
    margin-left: 58.33333333%;
  }

  .offset-xl-8 {
    margin-left: 66.66666667%;
  }

  .offset-xl-9 {
    margin-left: 75%;
  }

  .offset-xl-10 {
    margin-left: 83.33333333%;
  }

  .offset-xl-11 {
    margin-left: 91.66666667%;
  }

  .g-xl-0,
.gx-xl-0 {
    --bs-gutter-x: 0;
  }

  .g-xl-0,
.gy-xl-0 {
    --bs-gutter-y: 0;
  }

  .g-xl-1,
.gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xl-1,
.gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xl-2,
.gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xl-2,
.gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xl-3,
.gx-xl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xl-3,
.gy-xl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xl-4,
.gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xl-4,
.gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xl-5,
.gx-xl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xl-5,
.gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }

  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-xxl-0 {
    margin-left: 0;
  }

  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }

  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }

  .offset-xxl-3 {
    margin-left: 25%;
  }

  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }

  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }

  .offset-xxl-6 {
    margin-left: 50%;
  }

  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }

  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }

  .offset-xxl-9 {
    margin-left: 75%;
  }

  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }

  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }

  .g-xxl-0,
.gx-xxl-0 {
    --bs-gutter-x: 0;
  }

  .g-xxl-0,
.gy-xxl-0 {
    --bs-gutter-y: 0;
  }

  .g-xxl-1,
.gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xxl-1,
.gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xxl-2,
.gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xxl-2,
.gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xxl-3,
.gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xxl-3,
.gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xxl-4,
.gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xxl-4,
.gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xxl-5,
.gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xxl-5,
.gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.d-inline {
  display: inline;
}

.d-inline-block {
  display: inline-block;
}

.d-block {
  display: block;
}

.d-grid {
  display: grid;
}

.d-table {
  display: table;
}

.d-table-row {
  display: table-row;
}

.d-table-cell {
  display: table-cell;
}

.d-flex {
  display: flex;
}

.d-inline-flex {
  display: inline-flex;
}

.d-none {
  display: none;
}

.flex-fill {
  flex: 1 1 auto;
}

.flex-row {
  flex-direction: row;
}

.flex-column {
  flex-direction: column;
}

.flex-row-reverse {
  flex-direction: row-reverse;
}

.flex-column-reverse {
  flex-direction: column-reverse;
}

.flex-grow-0 {
  flex-grow: 0;
}

.flex-grow-1 {
  flex-grow: 1;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.flex-shrink-1 {
  flex-shrink: 1;
}

.flex-wrap {
  flex-wrap: wrap;
}

.flex-nowrap {
  flex-wrap: nowrap;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse;
}

.justify-content-start {
  justify-content: flex-start;
}

.justify-content-end {
  justify-content: flex-end;
}

.justify-content-center {
  justify-content: center;
}

.justify-content-between {
  justify-content: space-between;
}

.justify-content-around {
  justify-content: space-around;
}

.justify-content-evenly {
  justify-content: space-evenly;
}

.align-items-start {
  align-items: flex-start;
}

.align-items-end {
  align-items: flex-end;
}

.align-items-center {
  align-items: center;
}

.align-items-baseline {
  align-items: baseline;
}

.align-items-stretch {
  align-items: stretch;
}

.align-content-start {
  align-content: flex-start;
}

.align-content-end {
  align-content: flex-end;
}

.align-content-center {
  align-content: center;
}

.align-content-between {
  align-content: space-between;
}

.align-content-around {
  align-content: space-around;
}

.align-content-stretch {
  align-content: stretch;
}

.align-self-auto {
  align-self: auto;
}

.align-self-start {
  align-self: flex-start;
}

.align-self-end {
  align-self: flex-end;
}

.align-self-center {
  align-self: center;
}

.align-self-baseline {
  align-self: baseline;
}

.align-self-stretch {
  align-self: stretch;
}

.order-first {
  order: -1;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-last {
  order: 6;
}

.m-0 {
  margin: 0;
}

.m-1 {
  margin: 0.25rem;
}

.m-2 {
  margin: 0.5rem;
}

.m-3 {
  margin: 1rem;
}

.m-4 {
  margin: 1.5rem;
}

.m-5 {
  margin: 3rem;
}

.m-auto {
  margin: auto;
}

.mx-0 {
  margin-right: 0;
  margin-left: 0;
}

.mx-1 {
  margin-right: 0.25rem;
  margin-left: 0.25rem;
}

.mx-2 {
  margin-right: 0.5rem;
  margin-left: 0.5rem;
}

.mx-3 {
  margin-right: 1rem;
  margin-left: 1rem;
}

.mx-4 {
  margin-right: 1.5rem;
  margin-left: 1.5rem;
}

.mx-5 {
  margin-right: 3rem;
  margin-left: 3rem;
}

.mx-auto {
  margin-right: auto;
  margin-left: auto;
}

.my-0 {
  margin-top: 0;
  margin-bottom: 0;
}

.my-1 {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}

.my-2 {
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

.my-3 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.my-4 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.my-5 {
  margin-top: 3rem;
  margin-bottom: 3rem;
}

.my-auto {
  margin-top: auto;
  margin-bottom: auto;
}

.mt-0 {
  margin-top: 0;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-3 {
  margin-top: 1rem;
}

.mt-4 {
  margin-top: 1.5rem;
}

.mt-5 {
  margin-top: 3rem;
}

.mt-auto {
  margin-top: auto;
}

.me-0 {
  margin-right: 0;
}

.me-1 {
  margin-right: 0.25rem;
}

.me-2 {
  margin-right: 0.5rem;
}

.me-3 {
  margin-right: 1rem;
}

.me-4 {
  margin-right: 1.5rem;
}

.me-5 {
  margin-right: 3rem;
}

.me-auto {
  margin-right: auto;
}

.mb-0 {
  margin-bottom: 0;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.mb-2 {
  margin-bottom: 0.5rem;

}


.mb-3 {
  margin-bottom: 1rem;
}

.mb-4 {
  margin-bottom: 1.5rem;
}

.mb-5 {
  margin-bottom: 3rem;
}

.mb-auto {
  margin-bottom: auto;
}

.ms-0 {
  margin-left: 0;
}

.ms-1 {
  margin-left: 0.25rem;
}

.ms-2 {
  margin-left: 0.5rem;
}

.ms-3 {
  margin-left: 1rem;
}

.ms-4 {
  margin-left: 1.5rem;
}

.ms-5 {
  margin-left: 3rem;
}

.ms-auto {
  margin-left: auto;
}

.p-0 {
  padding: 0;
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-3 {
  padding: 1rem;
}

.p-4 {
  padding: 1.5rem;
}

.p-5 {
  padding: 3rem;
}

.px-0 {
  padding-right: 0;
  padding-left: 0;
}

.px-1 {
  padding-right: 0.25rem;
  padding-left: 0.25rem;
}

.px-2 {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.px-3 {
  padding-right: 1rem;
  padding-left: 1rem;
}

.px-4 {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}

.px-5 {
  padding-right: 3rem;
  padding-left: 3rem;
}

.py-0 {
  padding-top: 0;
  padding-bottom: 0;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-3 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-4 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-5 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.pt-0 {
  padding-top: 0;
}

.pt-1 {
  padding-top: 0.25rem;
}

.pt-2 {
  padding-top: 0.5rem;
}

.pt-3 {
  padding-top: 1rem;
}

.pt-4 {
  padding-top: 1.5rem;
}

.pt-5 {
  padding-top: 3rem;
}

.pe-0 {
  padding-right: 0;
}

.pe-1 {
  padding-right: 0.25rem;
}

.pe-2 {
  padding-right: 0.5rem;
}

.pe-3 {
  padding-right: 1rem;
}

.pe-4 {
  padding-right: 1.5rem;
}

.pe-5 {
  padding-right: 3rem;
}

.pb-0 {
  padding-bottom: 0;
}

.pb-1 {
  padding-bottom: 0.25rem;
}

.pb-2 {
  padding-bottom: 0.5rem;
}

.pb-3 {
  padding-bottom: 1rem;
}

.pb-4 {
  padding-bottom: 1.5rem;
}

.pb-5 {
  padding-bottom: 3rem;
}

.ps-0 {
  padding-left: 0;
}

.ps-1 {
  padding-left: 0.25rem;
}

.ps-2 {
  padding-left: 0.5rem;
}

.ps-3 {
  padding-left: 1rem;
}

.ps-4 {
  padding-left: 1.5rem;
}

.ps-5 {
  padding-left: 3rem;
}

@media (min-width: 576px) {
  .d-sm-inline {
    display: inline;
  }

  .d-sm-inline-block {
    display: inline-block;
  }

  .d-sm-block {
    display: block;
  }

  .d-sm-grid {
    display: grid;
  }

  .d-sm-table {
    display: table;
  }

  .d-sm-table-row {
    display: table-row;
  }

  .d-sm-table-cell {
    display: table-cell;
  }

  .d-sm-flex {
    display: flex;
  }

  .d-sm-inline-flex {
    display: inline-flex;
  }

  .d-sm-none {
    display: none;
  }

  .flex-sm-fill {
    flex: 1 1 auto;
  }

  .flex-sm-row {
    flex-direction: row;
  }

  .flex-sm-column {
    flex-direction: column;
  }

  .flex-sm-row-reverse {
    flex-direction: row-reverse;
  }

  .flex-sm-column-reverse {
    flex-direction: column-reverse;
  }

  .flex-sm-grow-0 {
    flex-grow: 0;
  }

  .flex-sm-grow-1 {
    flex-grow: 1;
  }

  .flex-sm-shrink-0 {
    flex-shrink: 0;
  }

  .flex-sm-shrink-1 {
    flex-shrink: 1;
  }

  .flex-sm-wrap {
    flex-wrap: wrap;
  }

  .flex-sm-nowrap {
    flex-wrap: nowrap;
  }

  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .justify-content-sm-start {
    justify-content: flex-start;
  }

  .justify-content-sm-end {
    justify-content: flex-end;
  }

  .justify-content-sm-center {
    justify-content: center;
  }

  .justify-content-sm-between {
    justify-content: space-between;
  }

  .justify-content-sm-around {
    justify-content: space-around;
  }

  .justify-content-sm-evenly {
    justify-content: space-evenly;
  }

  .align-items-sm-start {
    align-items: flex-start;
  }

  .align-items-sm-end {
    align-items: flex-end;
  }

  .align-items-sm-center {
    align-items: center;
  }

  .align-items-sm-baseline {
    align-items: baseline;
  }

  .align-items-sm-stretch {
    align-items: stretch;
  }

  .align-content-sm-start {
    align-content: flex-start;
  }

  .align-content-sm-end {
    align-content: flex-end;
  }

  .align-content-sm-center {
    align-content: center;
  }

  .align-content-sm-between {
    align-content: space-between;
  }

  .align-content-sm-around {
    align-content: space-around;
  }

  .align-content-sm-stretch {
    align-content: stretch;
  }

  .align-self-sm-auto {
    align-self: auto;
  }

  .align-self-sm-start {
    align-self: flex-start;
  }

  .align-self-sm-end {
    align-self: flex-end;
  }

  .align-self-sm-center {
    align-self: center;
  }

  .align-self-sm-baseline {
    align-self: baseline;
  }

  .align-self-sm-stretch {
    align-self: stretch;
  }

  .order-sm-first {
    order: -1;
  }

  .order-sm-0 {
    order: 0;
  }

  .order-sm-1 {
    order: 1;
  }

  .order-sm-2 {
    order: 2;
  }

  .order-sm-3 {
    order: 3;
  }

  .order-sm-4 {
    order: 4;
  }

  .order-sm-5 {
    order: 5;
  }

  .order-sm-last {
    order: 6;
  }

  .m-sm-0 {
    margin: 0;
  }

  .m-sm-1 {
    margin: 0.25rem;
  }

  .m-sm-2 {
    margin: 0.5rem;
  }

  .m-sm-3 {
    margin: 1rem;
  }

  .m-sm-4 {
    margin: 1.5rem;
  }

  .m-sm-5 {
    margin: 3rem;
  }

  .m-sm-auto {
    margin: auto;
  }

  .mx-sm-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-sm-1 {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }

  .mx-sm-2 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }

  .mx-sm-3 {
    margin-right: 1rem;
    margin-left: 1rem;
  }

  .mx-sm-4 {
    margin-right: 1.5rem;
    margin-left: 1.5rem;
  }

  .mx-sm-5 {
    margin-right: 3rem;
    margin-left: 3rem;
  }

  .mx-sm-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-sm-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-sm-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .my-sm-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-sm-3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-sm-4 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .my-sm-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-sm-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-sm-0 {
    margin-top: 0;
  }

  .mt-sm-1 {
    margin-top: 0.25rem;
  }

  .mt-sm-2 {
    margin-top: 0.5rem;
  }

  .mt-sm-3 {
    margin-top: 1rem;
  }

  .mt-sm-4 {
    margin-top: 1.5rem;
  }

  .mt-sm-5 {
    margin-top: 3rem;
  }

  .mt-sm-auto {
    margin-top: auto;
  }

  .me-sm-0 {
    margin-right: 0;
  }

  .me-sm-1 {
    margin-right: 0.25rem;
  }

  .me-sm-2 {
    margin-right: 0.5rem;
  }

  .me-sm-3 {
    margin-right: 1rem;
  }

  .me-sm-4 {
    margin-right: 1.5rem;
  }

  .me-sm-5 {
    margin-right: 3rem;
  }

  .me-sm-auto {
    margin-right: auto;
  }

  .mb-sm-0 {
    margin-bottom: 0;
  }

  .mb-sm-1 {
    margin-bottom: 0.25rem;
  }

  .mb-sm-2 {
    margin-bottom: 0.5rem;
  }

  .mb-sm-3 {
    margin-bottom: 1rem;
  }

  .mb-sm-4 {
    margin-bottom: 1.5rem;
  }

  .mb-sm-5 {
    margin-bottom: 3rem;
  }

  .mb-sm-auto {
    margin-bottom: auto;
  }

  .ms-sm-0 {
    margin-left: 0;
  }

  .ms-sm-1 {
    margin-left: 0.25rem;
  }

  .ms-sm-2 {
    margin-left: 0.5rem;
  }

  .ms-sm-3 {
    margin-left: 1rem;
  }

  .ms-sm-4 {
    margin-left: 1.5rem;
  }

  .ms-sm-5 {
    margin-left: 3rem;
  }

  .ms-sm-auto {
    margin-left: auto;
  }

  .p-sm-0 {
    padding: 0;
  }

  .p-sm-1 {
    padding: 0.25rem;
  }

  .p-sm-2 {
    padding: 0.5rem;
  }

  .p-sm-3 {
    padding: 1rem;
  }

  .p-sm-4 {
    padding: 1.5rem;
  }

  .p-sm-5 {
    padding: 3rem;
  }

  .px-sm-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-sm-1 {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }

  .px-sm-2 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .px-sm-3 {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .px-sm-4 {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }

  .px-sm-5 {
    padding-right: 3rem;
    padding-left: 3rem;
  }

  .py-sm-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-sm-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-sm-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-sm-3 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-sm-4 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-sm-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .pt-sm-0 {
    padding-top: 0;
  }

  .pt-sm-1 {
    padding-top: 0.25rem;
  }

  .pt-sm-2 {
    padding-top: 0.5rem;
  }

  .pt-sm-3 {
    padding-top: 1rem;
  }

  .pt-sm-4 {
    padding-top: 1.5rem;
  }

  .pt-sm-5 {
    padding-top: 3rem;
  }

  .pe-sm-0 {
    padding-right: 0;
  }

  .pe-sm-1 {
    padding-right: 0.25rem;
  }

  .pe-sm-2 {
    padding-right: 0.5rem;
  }

  .pe-sm-3 {
    padding-right: 1rem;
  }

  .pe-sm-4 {
    padding-right: 1.5rem;
  }

  .pe-sm-5 {
    padding-right: 3rem;
  }

  .pb-sm-0 {
    padding-bottom: 0;
  }

  .pb-sm-1 {
    padding-bottom: 0.25rem;
  }

  .pb-sm-2 {
    padding-bottom: 0.5rem;
  }

  .pb-sm-3 {
    padding-bottom: 1rem;
  }

  .pb-sm-4 {
    padding-bottom: 1.5rem;
  }

  .pb-sm-5 {
    padding-bottom: 3rem;
  }

  .ps-sm-0 {
    padding-left: 0;
  }

  .ps-sm-1 {
    padding-left: 0.25rem;
  }

  .ps-sm-2 {
    padding-left: 0.5rem;
  }

  .ps-sm-3 {
    padding-left: 1rem;
  }

  .ps-sm-4 {
    padding-left: 1.5rem;
  }

  .ps-sm-5 {
    padding-left: 3rem;
  }
}
@media (min-width: 768px) {
  .d-md-inline {
    display: inline;
  }

  .d-md-inline-block {
    display: inline-block;
  }

  .d-md-block {
    display: block;
  }

  .d-md-grid {
    display: grid;
  }

  .d-md-table {
    display: table;
  }

  .d-md-table-row {
    display: table-row;
  }

  .d-md-table-cell {
    display: table-cell;
  }

  .d-md-flex {
    display: flex;
  }

  .d-md-inline-flex {
    display: inline-flex;
  }

  .d-md-none {
    display: none;
  }

  .flex-md-fill {
    flex: 1 1 auto;
  }

  .flex-md-row {
    flex-direction: row;
  }

  .flex-md-column {
    flex-direction: column;
  }

  .flex-md-row-reverse {
    flex-direction: row-reverse;
  }

  .flex-md-column-reverse {
    flex-direction: column-reverse;
  }

  .flex-md-grow-0 {
    flex-grow: 0;
  }

  .flex-md-grow-1 {
    flex-grow: 1;
  }

  .flex-md-shrink-0 {
    flex-shrink: 0;
  }

  .flex-md-shrink-1 {
    flex-shrink: 1;
  }

  .flex-md-wrap {
    flex-wrap: wrap;
  }

  .flex-md-nowrap {
    flex-wrap: nowrap;
  }

  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .justify-content-md-start {
    justify-content: flex-start;
  }

  .justify-content-md-end {
    justify-content: flex-end;
  }

  .justify-content-md-center {
    justify-content: center;
  }

  .justify-content-md-between {
    justify-content: space-between;
  }

  .justify-content-md-around {
    justify-content: space-around;
  }

  .justify-content-md-evenly {
    justify-content: space-evenly;
  }

  .align-items-md-start {
    align-items: flex-start;
  }

  .align-items-md-end {
    align-items: flex-end;
  }

  .align-items-md-center {
    align-items: center;
  }

  .align-items-md-baseline {
    align-items: baseline;
  }

  .align-items-md-stretch {
    align-items: stretch;
  }

  .align-content-md-start {
    align-content: flex-start;
  }

  .align-content-md-end {
    align-content: flex-end;
  }

  .align-content-md-center {
    align-content: center;
  }

  .align-content-md-between {
    align-content: space-between;
  }

  .align-content-md-around {
    align-content: space-around;
  }

  .align-content-md-stretch {
    align-content: stretch;
  }

  .align-self-md-auto {
    align-self: auto;
  }

  .align-self-md-start {
    align-self: flex-start;
  }

  .align-self-md-end {
    align-self: flex-end;
  }

  .align-self-md-center {
    align-self: center;
  }

  .align-self-md-baseline {
    align-self: baseline;
  }

  .align-self-md-stretch {
    align-self: stretch;
  }

  .order-md-first {
    order: -1;
  }

  .order-md-0 {
    order: 0;
  }

  .order-md-1 {
    order: 1;
  }

  .order-md-2 {
    order: 2;
  }

  .order-md-3 {
    order: 3;
  }

  .order-md-4 {
    order: 4;
  }

  .order-md-5 {
    order: 5;
  }

  .order-md-last {
    order: 6;
  }

  .m-md-0 {
    margin: 0;
  }

  .m-md-1 {
    margin: 0.25rem;
  }

  .m-md-2 {
    margin: 0.5rem;
  }

  .m-md-3 {
    margin: 1rem;
  }

  .m-md-4 {
    margin: 1.5rem;
  }

  .m-md-5 {
    margin: 3rem;
  }

  .m-md-auto {
    margin: auto;
  }

  .mx-md-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-md-1 {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }

  .mx-md-2 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }

  .mx-md-3 {
    margin-right: 1rem;
    margin-left: 1rem;
  }

  .mx-md-4 {
    margin-right: 1.5rem;
    margin-left: 1.5rem;
  }

  .mx-md-5 {
    margin-right: 3rem;
    margin-left: 3rem;
  }

  .mx-md-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-md-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-md-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .my-md-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-md-3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-md-4 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .my-md-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-md-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-md-0 {
    margin-top: 0;
  }

  .mt-md-1 {
    margin-top: 0.25rem;
  }

  .mt-md-2 {
    margin-top: 0.5rem;
  }

  .mt-md-3 {
    margin-top: 1rem;
  }

  .mt-md-4 {
    margin-top: 1.5rem;
  }

  .mt-md-5 {
    margin-top: 3rem;
  }

  .mt-md-auto {
    margin-top: auto;
  }

  .me-md-0 {
    margin-right: 0;
  }

  .me-md-1 {
    margin-right: 0.25rem;
  }

  .me-md-2 {
    margin-right: 0.5rem;
  }

  .me-md-3 {
    margin-right: 1rem;
  }

  .me-md-4 {
    margin-right: 1.5rem;
  }

  .me-md-5 {
    margin-right: 3rem;
  }

  .me-md-auto {
    margin-right: auto;
  }

  .mb-md-0 {
    margin-bottom: 0;
  }

  .mb-md-1 {
    margin-bottom: 0.25rem;
  }

  .mb-md-2 {
    margin-bottom: 0.5rem;
  }

  .mb-md-3 {
    margin-bottom: 1rem;
  }

  .mb-md-4 {
    margin-bottom: 1.5rem;
  }

  .mb-md-5 {
    margin-bottom: 3rem;
  }

  .mb-md-auto {
    margin-bottom: auto;
  }

  .ms-md-0 {
    margin-left: 0;
  }

  .ms-md-1 {
    margin-left: 0.25rem;
  }

  .ms-md-2 {
    margin-left: 0.5rem;
  }

  .ms-md-3 {
    margin-left: 1rem;
  }

  .ms-md-4 {
    margin-left: 1.5rem;
  }

  .ms-md-5 {
    margin-left: 3rem;
  }

  .ms-md-auto {
    margin-left: auto;
  }

  .p-md-0 {
    padding: 0;
  }

  .p-md-1 {
    padding: 0.25rem;
  }

  .p-md-2 {
    padding: 0.5rem;
  }

  .p-md-3 {
    padding: 1rem;
  }

  .p-md-4 {
    padding: 1.5rem;
  }

  .p-md-5 {
    padding: 3rem;
  }

  .px-md-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-md-1 {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }

  .px-md-2 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .px-md-3 {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .px-md-4 {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }

  .px-md-5 {
    padding-right: 3rem;
    padding-left: 3rem;
  }

  .py-md-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-md-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-md-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-md-3 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-md-4 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-md-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .pt-md-0 {
    padding-top: 0;
  }

  .pt-md-1 {
    padding-top: 0.25rem;
  }

  .pt-md-2 {
    padding-top: 0.5rem;
  }

  .pt-md-3 {
    padding-top: 1rem;
  }

  .pt-md-4 {
    padding-top: 1.5rem;
  }

  .pt-md-5 {
    padding-top: 3rem;
  }

  .pe-md-0 {
    padding-right: 0;
  }

  .pe-md-1 {
    padding-right: 0.25rem;
  }

  .pe-md-2 {
    padding-right: 0.5rem;
  }

  .pe-md-3 {
    padding-right: 1rem;
  }

  .pe-md-4 {
    padding-right: 1.5rem;
  }

  .pe-md-5 {
    padding-right: 3rem;
  }

  .pb-md-0 {
    padding-bottom: 0;
  }

  .pb-md-1 {
    padding-bottom: 0.25rem;
  }

  .pb-md-2 {
    padding-bottom: 0.5rem;
  }

  .pb-md-3 {
    padding-bottom: 1rem;
  }

  .pb-md-4 {
    padding-bottom: 1.5rem;
  }

  .pb-md-5 {
    padding-bottom: 3rem;
  }

  .ps-md-0 {
    padding-left: 0;
  }

  .ps-md-1 {
    padding-left: 0.25rem;
  }

  .ps-md-2 {
    padding-left: 0.5rem;
  }

  .ps-md-3 {
    padding-left: 1rem;
  }

  .ps-md-4 {
    padding-left: 1.5rem;
  }

  .ps-md-5 {
    padding-left: 3rem;
  }
}
@media (min-width: 992px) {
  .d-lg-inline {
    display: inline;
  }

  .d-lg-inline-block {
    display: inline-block;
  }

  .d-lg-block {
    display: block;
  }

  .d-lg-grid {
    display: grid;
  }

  .d-lg-table {
    display: table;
  }

  .d-lg-table-row {
    display: table-row;
  }

  .d-lg-table-cell {
    display: table-cell;
  }

  .d-lg-flex {
    display: flex;
  }

  .d-lg-inline-flex {
    display: inline-flex;
  }

  .d-lg-none {
    display: none;
  }

  .flex-lg-fill {
    flex: 1 1 auto;
  }

  .flex-lg-row {
    flex-direction: row;
  }

  .flex-lg-column {
    flex-direction: column;
  }

  .flex-lg-row-reverse {
    flex-direction: row-reverse;
  }

  .flex-lg-column-reverse {
    flex-direction: column-reverse;
  }

  .flex-lg-grow-0 {
    flex-grow: 0;
  }

  .flex-lg-grow-1 {
    flex-grow: 1;
  }

  .flex-lg-shrink-0 {
    flex-shrink: 0;
  }

  .flex-lg-shrink-1 {
    flex-shrink: 1;
  }

  .flex-lg-wrap {
    flex-wrap: wrap;
  }

  .flex-lg-nowrap {
    flex-wrap: nowrap;
  }

  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .justify-content-lg-start {
    justify-content: flex-start;
  }

  .justify-content-lg-end {
    justify-content: flex-end;
  }

  .justify-content-lg-center {
    justify-content: center;
  }

  .justify-content-lg-between {
    justify-content: space-between;
  }

  .justify-content-lg-around {
    justify-content: space-around;
  }

  .justify-content-lg-evenly {
    justify-content: space-evenly;
  }

  .align-items-lg-start {
    align-items: flex-start;
  }

  .align-items-lg-end {
    align-items: flex-end;
  }

  .align-items-lg-center {
    align-items: center;
  }

  .align-items-lg-baseline {
    align-items: baseline;
  }

  .align-items-lg-stretch {
    align-items: stretch;
  }

  .align-content-lg-start {
    align-content: flex-start;
  }

  .align-content-lg-end {
    align-content: flex-end;
  }

  .align-content-lg-center {
    align-content: center;
  }

  .align-content-lg-between {
    align-content: space-between;
  }

  .align-content-lg-around {
    align-content: space-around;
  }

  .align-content-lg-stretch {
    align-content: stretch;
  }

  .align-self-lg-auto {
    align-self: auto;
  }

  .align-self-lg-start {
    align-self: flex-start;
  }

  .align-self-lg-end {
    align-self: flex-end;
  }

  .align-self-lg-center {
    align-self: center;
  }

  .align-self-lg-baseline {
    align-self: baseline;
  }

  .align-self-lg-stretch {
    align-self: stretch;
  }

  .order-lg-first {
    order: -1;
  }

  .order-lg-0 {
    order: 0;
  }

  .order-lg-1 {
    order: 1;
  }

  .order-lg-2 {
    order: 2;
  }

  .order-lg-3 {
    order: 3;
  }

  .order-lg-4 {
    order: 4;
  }

  .order-lg-5 {
    order: 5;
  }

  .order-lg-last {
    order: 6;
  }

  .m-lg-0 {
    margin: 0;
  }

  .m-lg-1 {
    margin: 0.25rem;
  }

  .m-lg-2 {
    margin: 0.5rem;
  }

  .m-lg-3 {
    margin: 1rem;
  }

  .m-lg-4 {
    margin: 1.5rem;
  }

  .m-lg-5 {
    margin: 3rem;
  }

  .m-lg-auto {
    margin: auto;
  }

  .mx-lg-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-lg-1 {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }

  .mx-lg-2 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }

  .mx-lg-3 {
    margin-right: 1rem;
    margin-left: 1rem;
  }

  .mx-lg-4 {
    margin-right: 1.5rem;
    margin-left: 1.5rem;
  }

  .mx-lg-5 {
    margin-right: 3rem;
    margin-left: 3rem;
  }

  .mx-lg-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-lg-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-lg-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .my-lg-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-lg-3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-lg-4 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .my-lg-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-lg-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-lg-0 {
    margin-top: 0;
  }

  .mt-lg-1 {
    margin-top: 0.25rem;
  }

  .mt-lg-2 {
    margin-top: 0.5rem;
  }

  .mt-lg-3 {
    margin-top: 1rem;
  }

  .mt-lg-4 {
    margin-top: 1.5rem;
  }

  .mt-lg-5 {
    margin-top: 3rem;
  }

  .mt-lg-auto {
    margin-top: auto;
  }

  .me-lg-0 {
    margin-right: 0;
  }

  .me-lg-1 {
    margin-right: 0.25rem;
  }

  .me-lg-2 {
    margin-right: 0.5rem;
  }

  .me-lg-3 {
    margin-right: 1rem;
  }

  .me-lg-4 {
    margin-right: 1.5rem;
  }

  .me-lg-5 {
    margin-right: 3rem;
  }

  .me-lg-auto {
    margin-right: auto;
  }

  .mb-lg-0 {
    margin-bottom: 0;
  }

  .mb-lg-1 {
    margin-bottom: 0.25rem;
  }

  .mb-lg-2 {
    margin-bottom: 0.5rem;
  }

  .mb-lg-3 {
    margin-bottom: 1rem;
  }

  .mb-lg-4 {
    margin-bottom: 1.5rem;
  }

  .mb-lg-5 {
    margin-bottom: 3rem;
  }

  .mb-lg-auto {
    margin-bottom: auto;
  }

  .ms-lg-0 {
    margin-left: 0;
  }

  .ms-lg-1 {
    margin-left: 0.25rem;
  }

  .ms-lg-2 {
    margin-left: 0.5rem;
  }

  .ms-lg-3 {
    margin-left: 1rem;
  }

  .ms-lg-4 {
    margin-left: 1.5rem;
  }

  .ms-lg-5 {
    margin-left: 3rem;
  }

  .ms-lg-auto {
    margin-left: auto;
  }

  .p-lg-0 {
    padding: 0;
  }

  .p-lg-1 {
    padding: 0.25rem;
  }

  .p-lg-2 {
    padding: 0.5rem;
  }

  .p-lg-3 {
    padding: 1rem;
  }

  .p-lg-4 {
    padding: 1.5rem;
  }

  .p-lg-5 {
    padding: 3rem;
  }

  .px-lg-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-lg-1 {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }

  .px-lg-2 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .px-lg-3 {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .px-lg-4 {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }

  .px-lg-5 {
    padding-right: 3rem;
    padding-left: 3rem;
  }

  .py-lg-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-lg-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-lg-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-lg-3 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-lg-4 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-lg-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .pt-lg-0 {
    padding-top: 0;
  }

  .pt-lg-1 {
    padding-top: 0.25rem;
  }

  .pt-lg-2 {
    padding-top: 0.5rem;
  }

  .pt-lg-3 {
    padding-top: 1rem;
  }

  .pt-lg-4 {
    padding-top: 1.5rem;
  }

  .pt-lg-5 {
    padding-top: 3rem;
  }

  .pe-lg-0 {
    padding-right: 0;
  }

  .pe-lg-1 {
    padding-right: 0.25rem;
  }

  .pe-lg-2 {
    padding-right: 0.5rem;
  }

  .pe-lg-3 {
    padding-right: 1rem;
  }

  .pe-lg-4 {
    padding-right: 1.5rem;
  }

  .pe-lg-5 {
    padding-right: 3rem;
  }

  .pb-lg-0 {
    padding-bottom: 0;
  }

  .pb-lg-1 {
    padding-bottom: 0.25rem;
  }

  .pb-lg-2 {
    padding-bottom: 0.5rem;
  }

  .pb-lg-3 {
    padding-bottom: 1rem;
  }

  .pb-lg-4 {
    padding-bottom: 1.5rem;
  }

  .pb-lg-5 {
    padding-bottom: 3rem;
  }

  .ps-lg-0 {
    padding-left: 0;
  }

  .ps-lg-1 {
    padding-left: 0.25rem;
  }

  .ps-lg-2 {
    padding-left: 0.5rem;
  }

  .ps-lg-3 {
    padding-left: 1rem;
  }

  .ps-lg-4 {
    padding-left: 1.5rem;
  }

  .ps-lg-5 {
    padding-left: 3rem;
  }
}
@media (min-width: 1200px) {
  .d-xl-inline {
    display: inline;
  }

  .d-xl-inline-block {
    display: inline-block;
  }

  .d-xl-block {
    display: block;
  }

  .d-xl-grid {
    display: grid;
  }

  .d-xl-table {
    display: table;
  }

  .d-xl-table-row {
    display: table-row;
  }

  .d-xl-table-cell {
    display: table-cell;
  }

  .d-xl-flex {
    display: flex;
  }

  .d-xl-inline-flex {
    display: inline-flex;
  }

  .d-xl-none {
    display: none;
  }

  .flex-xl-fill {
    flex: 1 1 auto;
  }

  .flex-xl-row {
    flex-direction: row;
  }

  .flex-xl-column {
    flex-direction: column;
  }

  .flex-xl-row-reverse {
    flex-direction: row-reverse;
  }

  .flex-xl-column-reverse {
    flex-direction: column-reverse;
  }

  .flex-xl-grow-0 {
    flex-grow: 0;
  }

  .flex-xl-grow-1 {
    flex-grow: 1;
  }

  .flex-xl-shrink-0 {
    flex-shrink: 0;
  }

  .flex-xl-shrink-1 {
    flex-shrink: 1;
  }

  .flex-xl-wrap {
    flex-wrap: wrap;
  }

  .flex-xl-nowrap {
    flex-wrap: nowrap;
  }

  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .justify-content-xl-start {
    justify-content: flex-start;
  }

  .justify-content-xl-end {
    justify-content: flex-end;
  }

  .justify-content-xl-center {
    justify-content: center;
  }

  .justify-content-xl-between {
    justify-content: space-between;
  }

  .justify-content-xl-around {
    justify-content: space-around;
  }

  .justify-content-xl-evenly {
    justify-content: space-evenly;
  }

  .align-items-xl-start {
    align-items: flex-start;
  }

  .align-items-xl-end {
    align-items: flex-end;
  }

  .align-items-xl-center {
    align-items: center;
  }

  .align-items-xl-baseline {
    align-items: baseline;
  }

  .align-items-xl-stretch {
    align-items: stretch;
  }

  .align-content-xl-start {
    align-content: flex-start;
  }

  .align-content-xl-end {
    align-content: flex-end;
  }

  .align-content-xl-center {
    align-content: center;
  }

  .align-content-xl-between {
    align-content: space-between;
  }

  .align-content-xl-around {
    align-content: space-around;
  }

  .align-content-xl-stretch {
    align-content: stretch;
  }

  .align-self-xl-auto {
    align-self: auto;
  }

  .align-self-xl-start {
    align-self: flex-start;
  }

  .align-self-xl-end {
    align-self: flex-end;
  }

  .align-self-xl-center {
    align-self: center;
  }

  .align-self-xl-baseline {
    align-self: baseline;
  }

  .align-self-xl-stretch {
    align-self: stretch;
  }

  .order-xl-first {
    order: -1;
  }

  .order-xl-0 {
    order: 0;
  }

  .order-xl-1 {
    order: 1;
  }

  .order-xl-2 {
    order: 2;
  }

  .order-xl-3 {
    order: 3;
  }

  .order-xl-4 {
    order: 4;
  }

  .order-xl-5 {
    order: 5;
  }

  .order-xl-last {
    order: 6;
  }

  .m-xl-0 {
    margin: 0;
  }

  .m-xl-1 {
    margin: 0.25rem;
  }

  .m-xl-2 {
    margin: 0.5rem;
  }

  .m-xl-3 {
    margin: 1rem;
  }

  .m-xl-4 {
    margin: 1.5rem;
  }

  .m-xl-5 {
    margin: 3rem;
  }

  .m-xl-auto {
    margin: auto;
  }

  .mx-xl-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-xl-1 {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }

  .mx-xl-2 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }

  .mx-xl-3 {
    margin-right: 1rem;
    margin-left: 1rem;
  }

  .mx-xl-4 {
    margin-right: 1.5rem;
    margin-left: 1.5rem;
  }

  .mx-xl-5 {
    margin-right: 3rem;
    margin-left: 3rem;
  }

  .mx-xl-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-xl-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-xl-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .my-xl-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-xl-3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-xl-4 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .my-xl-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-xl-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-xl-0 {
    margin-top: 0;
  }

  .mt-xl-1 {
    margin-top: 0.25rem;
  }

  .mt-xl-2 {
    margin-top: 0.5rem;
  }

  .mt-xl-3 {
    margin-top: 1rem;
  }

  .mt-xl-4 {
    margin-top: 1.5rem;
  }

  .mt-xl-5 {
    margin-top: 3rem;
  }

  .mt-xl-auto {
    margin-top: auto;
  }

  .me-xl-0 {
    margin-right: 0;
  }

  .me-xl-1 {
    margin-right: 0.25rem;
  }

  .me-xl-2 {
    margin-right: 0.5rem;
  }

  .me-xl-3 {
    margin-right: 1rem;
  }

  .me-xl-4 {
    margin-right: 1.5rem;
  }

  .me-xl-5 {
    margin-right: 3rem;
  }

  .me-xl-auto {
    margin-right: auto;
  }

  .mb-xl-0 {
    margin-bottom: 0;
  }

  .mb-xl-1 {
    margin-bottom: 0.25rem;
  }

  .mb-xl-2 {
    margin-bottom: 0.5rem;
  }

  .mb-xl-3 {
    margin-bottom: 1rem;
  }

  .mb-xl-4 {
    margin-bottom: 1.5rem;
  }

  .mb-xl-5 {
    margin-bottom: 3rem;
  }

  .mb-xl-auto {
    margin-bottom: auto;
  }

  .ms-xl-0 {
    margin-left: 0;
  }

  .ms-xl-1 {
    margin-left: 0.25rem;
  }

  .ms-xl-2 {
    margin-left: 0.5rem;
  }

  .ms-xl-3 {
    margin-left: 1rem;
  }

  .ms-xl-4 {
    margin-left: 1.5rem;
  }

  .ms-xl-5 {
    margin-left: 3rem;
  }

  .ms-xl-auto {
    margin-left: auto;
  }

  .p-xl-0 {
    padding: 0;
  }

  .p-xl-1 {
    padding: 0.25rem;
  }

  .p-xl-2 {
    padding: 0.5rem;
  }

  .p-xl-3 {
    padding: 1rem;
  }

  .p-xl-4 {
    padding: 1.5rem;
  }

  .p-xl-5 {
    padding: 3rem;
  }

  .px-xl-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-xl-1 {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }

  .px-xl-2 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .px-xl-3 {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .px-xl-4 {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }

  .px-xl-5 {
    padding-right: 3rem;
    padding-left: 3rem;
  }

  .py-xl-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-xl-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-xl-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-xl-3 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-xl-4 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-xl-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .pt-xl-0 {
    padding-top: 0;
  }

  .pt-xl-1 {
    padding-top: 0.25rem;
  }

  .pt-xl-2 {
    padding-top: 0.5rem;
  }

  .pt-xl-3 {
    padding-top: 1rem;
  }

  .pt-xl-4 {
    padding-top: 1.5rem;
  }

  .pt-xl-5 {
    padding-top: 3rem;
  }

  .pe-xl-0 {
    padding-right: 0;
  }

  .pe-xl-1 {
    padding-right: 0.25rem;
  }

  .pe-xl-2 {
    padding-right: 0.5rem;
  }

  .pe-xl-3 {
    padding-right: 1rem;
  }

  .pe-xl-4 {
    padding-right: 1.5rem;
  }

  .pe-xl-5 {
    padding-right: 3rem;
  }

  .pb-xl-0 {
    padding-bottom: 0;
  }

  .pb-xl-1 {
    padding-bottom: 0.25rem;
  }

  .pb-xl-2 {
    padding-bottom: 0.5rem;
  }

  .pb-xl-3 {
    padding-bottom: 1rem;
  }

  .pb-xl-4 {
    padding-bottom: 1.5rem;
  }

  .pb-xl-5 {
    padding-bottom: 3rem;
  }

  .ps-xl-0 {
    padding-left: 0;
  }

  .ps-xl-1 {
    padding-left: 0.25rem;
  }

  .ps-xl-2 {
    padding-left: 0.5rem;
  }

  .ps-xl-3 {
    padding-left: 1rem;
  }

  .ps-xl-4 {
    padding-left: 1.5rem;
  }

  .ps-xl-5 {
    padding-left: 3rem;
  }
}
@media (min-width: 1400px) {
  .d-xxl-inline {
    display: inline;
  }

  .d-xxl-inline-block {
    display: inline-block;
  }

  .d-xxl-block {
    display: block;
  }

  .d-xxl-grid {
    display: grid;
  }

  .d-xxl-table {
    display: table;
  }

  .d-xxl-table-row {
    display: table-row;
  }

  .d-xxl-table-cell {
    display: table-cell;
  }

  .d-xxl-flex {
    display: flex;
  }

  .d-xxl-inline-flex {
    display: inline-flex;
  }

  .d-xxl-none {
    display: none;
  }

  .flex-xxl-fill {
    flex: 1 1 auto;
  }

  .flex-xxl-row {
    flex-direction: row;
  }

  .flex-xxl-column {
    flex-direction: column;
  }

  .flex-xxl-row-reverse {
    flex-direction: row-reverse;
  }

  .flex-xxl-column-reverse {
    flex-direction: column-reverse;
  }

  .flex-xxl-grow-0 {
    flex-grow: 0;
  }

  .flex-xxl-grow-1 {
    flex-grow: 1;
  }

  .flex-xxl-shrink-0 {
    flex-shrink: 0;
  }

  .flex-xxl-shrink-1 {
    flex-shrink: 1;
  }

  .flex-xxl-wrap {
    flex-wrap: wrap;
  }

  .flex-xxl-nowrap {
    flex-wrap: nowrap;
  }

  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .justify-content-xxl-start {
    justify-content: flex-start;
  }

  .justify-content-xxl-end {
    justify-content: flex-end;
  }

  .justify-content-xxl-center {
    justify-content: center;
  }

  .justify-content-xxl-between {
    justify-content: space-between;
  }

  .justify-content-xxl-around {
    justify-content: space-around;
  }

  .justify-content-xxl-evenly {
    justify-content: space-evenly;
  }

  .align-items-xxl-start {
    align-items: flex-start;
  }

  .align-items-xxl-end {
    align-items: flex-end;
  }

  .align-items-xxl-center {
    align-items: center;
  }

  .align-items-xxl-baseline {
    align-items: baseline;
  }

  .align-items-xxl-stretch {
    align-items: stretch;
  }

  .align-content-xxl-start {
    align-content: flex-start;
  }

  .align-content-xxl-end {
    align-content: flex-end;
  }

  .align-content-xxl-center {
    align-content: center;
  }

  .align-content-xxl-between {
    align-content: space-between;
  }

  .align-content-xxl-around {
    align-content: space-around;
  }

  .align-content-xxl-stretch {
    align-content: stretch;
  }

  .align-self-xxl-auto {
    align-self: auto;
  }

  .align-self-xxl-start {
    align-self: flex-start;
  }

  .align-self-xxl-end {
    align-self: flex-end;
  }

  .align-self-xxl-center {
    align-self: center;
  }

  .align-self-xxl-baseline {
    align-self: baseline;
  }

  .align-self-xxl-stretch {
    align-self: stretch;
  }

  .order-xxl-first {
    order: -1;
  }

  .order-xxl-0 {
    order: 0;
  }

  .order-xxl-1 {
    order: 1;
  }

  .order-xxl-2 {
    order: 2;
  }

  .order-xxl-3 {
    order: 3;
  }

  .order-xxl-4 {
    order: 4;
  }

  .order-xxl-5 {
    order: 5;
  }

  .order-xxl-last {
    order: 6;
  }

  .m-xxl-0 {
    margin: 0;
  }

  .m-xxl-1 {
    margin: 0.25rem;
  }

  .m-xxl-2 {
    margin: 0.5rem;
  }

  .m-xxl-3 {
    margin: 1rem;
  }

  .m-xxl-4 {
    margin: 1.5rem;
  }

  .m-xxl-5 {
    margin: 3rem;
  }

  .m-xxl-auto {
    margin: auto;
  }

  .mx-xxl-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-xxl-1 {
    margin-right: 0.25rem;
    margin-left: 0.25rem;
  }

  .mx-xxl-2 {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
  }

  .mx-xxl-3 {
    margin-right: 1rem;
    margin-left: 1rem;
  }

  .mx-xxl-4 {
    margin-right: 1.5rem;
    margin-left: 1.5rem;
  }

  .mx-xxl-5 {
    margin-right: 3rem;
    margin-left: 3rem;
  }

  .mx-xxl-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-xxl-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-xxl-1 {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
  }

  .my-xxl-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-xxl-3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-xxl-4 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .my-xxl-5 {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  .my-xxl-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-xxl-0 {
    margin-top: 0;
  }

  .mt-xxl-1 {
    margin-top: 0.25rem;
  }

  .mt-xxl-2 {
    margin-top: 0.5rem;
  }

  .mt-xxl-3 {
    margin-top: 1rem;
  }

  .mt-xxl-4 {
    margin-top: 1.5rem;
  }

  .mt-xxl-5 {
    margin-top: 3rem;
  }

  .mt-xxl-auto {
    margin-top: auto;
  }

  .me-xxl-0 {
    margin-right: 0;
  }

  .me-xxl-1 {
    margin-right: 0.25rem;
  }

  .me-xxl-2 {
    margin-right: 0.5rem;
  }

  .me-xxl-3 {
    margin-right: 1rem;
  }

  .me-xxl-4 {
    margin-right: 1.5rem;
  }

  .me-xxl-5 {
    margin-right: 3rem;
  }

  .me-xxl-auto {
    margin-right: auto;
  }

  .mb-xxl-0 {
    margin-bottom: 0;
  }

  .mb-xxl-1 {
    margin-bottom: 0.25rem;
  }

  .mb-xxl-2 {
    margin-bottom: 0.5rem;
  }

  .mb-xxl-3 {
    margin-bottom: 1rem;
  }

  .mb-xxl-4 {
    margin-bottom: 1.5rem;
  }

  .mb-xxl-5 {
    margin-bottom: 3rem;
  }

  .mb-xxl-auto {
    margin-bottom: auto;
  }

  .ms-xxl-0 {
    margin-left: 0;
  }

  .ms-xxl-1 {
    margin-left: 0.25rem;
  }

  .ms-xxl-2 {
    margin-left: 0.5rem;
  }

  .ms-xxl-3 {
    margin-left: 1rem;
  }

  .ms-xxl-4 {
    margin-left: 1.5rem;
  }

  .ms-xxl-5 {
    margin-left: 3rem;
  }

  .ms-xxl-auto {
    margin-left: auto;
  }

  .p-xxl-0 {
    padding: 0;
  }

  .p-xxl-1 {
    padding: 0.25rem;
  }

  .p-xxl-2 {
    padding: 0.5rem;
  }

  .p-xxl-3 {
    padding: 1rem;
  }

  .p-xxl-4 {
    padding: 1.5rem;
  }

  .p-xxl-5 {
    padding: 3rem;
  }

  .px-xxl-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-xxl-1 {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }

  .px-xxl-2 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .px-xxl-3 {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .px-xxl-4 {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }

  .px-xxl-5 {
    padding-right: 3rem;
    padding-left: 3rem;
  }

  .py-xxl-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-xxl-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-xxl-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-xxl-3 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-xxl-4 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-xxl-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .pt-xxl-0 {
    padding-top: 0;
  }

  .pt-xxl-1 {
    padding-top: 0.25rem;
  }

  .pt-xxl-2 {
    padding-top: 0.5rem;
  }

  .pt-xxl-3 {
    padding-top: 1rem;
  }

  .pt-xxl-4 {
    padding-top: 1.5rem;
  }

  .pt-xxl-5 {
    padding-top: 3rem;
  }

  .pe-xxl-0 {
    padding-right: 0;
  }

  .pe-xxl-1 {
    padding-right: 0.25rem;
  }

  .pe-xxl-2 {
    padding-right: 0.5rem;
  }

  .pe-xxl-3 {
    padding-right: 1rem;
  }

  .pe-xxl-4 {
    padding-right: 1.5rem;
  }

  .pe-xxl-5 {
    padding-right: 3rem;
  }

  .pb-xxl-0 {
    padding-bottom: 0;
  }

  .pb-xxl-1 {
    padding-bottom: 0.25rem;
  }

  .pb-xxl-2 {
    padding-bottom: 0.5rem;
  }

  .pb-xxl-3 {
    padding-bottom: 1rem;
  }

  .pb-xxl-4 {
    padding-bottom: 1.5rem;
  }

  .pb-xxl-5 {
    padding-bottom: 3rem;
  }

  .ps-xxl-0 {
    padding-left: 0;
  }

  .ps-xxl-1 {
    padding-left: 0.25rem;
  }

  .ps-xxl-2 {
    padding-left: 0.5rem;
  }

  .ps-xxl-3 {
    padding-left: 1rem;
  }

  .ps-xxl-4 {
    padding-left: 1.5rem;
  }

  .ps-xxl-5 {
    padding-left: 3rem;
  }
}
@media print {
  .d-print-inline {
    display: inline;
  }

  .d-print-inline-block {
    display: inline-block;
  }

  .d-print-block {
    display: block;
  }

  .d-print-grid {
    display: grid;
  }

  .d-print-table {
    display: table;
  }

  .d-print-table-row {
    display: table-row;
  }

  .d-print-table-cell {
    display: table-cell;
  }

  .d-print-flex {
    display: flex;
  }

  .d-print-inline-flex {
    display: inline-flex;
  }

  .d-print-none {
    display: none;
  }
}

 
   /*top_part start*/
   .first_1{
    margin-top: 185px;
   }
   .first_2{
    margin-top: 37px;
   }
   .P_part{
    background-color: #000000;
    color: white;
    padding-top: 15px;
    margin-bottom: -22px;
    margin-top: 29px;
   }
   .P_part1{
    background-color: #000000;
    color: white;
    margin-top: 22px;
   }
   .homeicon{
    font-size: 20px;
   }
   
   .logop{
    background-color: #b80000;
    color: white;
    height: auto;
    margin-bottom: -29px;
    margin-right: -10px;

   }
   .logo_p_taxt{
    margin-top: 37px;
    font-size: 12px;
   }
  .so-icon{
    margin-top: 30px;
  }
   
   .bgnav{
    background-color:#000000;
    
    
   }

   .bgnav ul li a{
    border-left: 1px solid #b80000;
   }
   .bgnav li a{
    color: white;
    padding: 0px 0px 0px 23px;
    text-decoration: none;
   }
   /*top_part end*/

  /*slide_bar start*/
   .slide_text_1{
    margin-bottom: 5px;
    padding-top: 7px;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 5px;
   }

  .slide_text h3{
    font-size: 16px;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    color: rgb(2 0 0);
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 1.4rem;
    letter-spacing: .0071428571em;
    margin-left: -14px;
  }
  .slide_text p{
    color: #6060608f;
    font-size: 11px;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 1.0rem;
    letter-spacing: .0071428571em;
    margin-left: -14px;
   
  }
  /*slide_bar start*/

  /*footer start*/
   .copy_footer{
    margin-left: 544px;
    margin-bottom: 26px;
    margin-top: 31px;
  }
  .logo_foot_taxt{
    font-size: 12px;
    margin-top: 6px;
  }


  .foot_copy{
    background-color: #b80000;
    padding: 20px 0px 20px 0px;
    text-align: center;
    font-family: monospace;
  }

  .foot_part1{
    background-color:#000000;
    color: white;
    margin-top: 22px;
   }
  .foot_menu{
    margin-top: 37px;
    border-left: 1px solid #b80000;
    margin-bottom: 34px;
  }
  .foot_menu ul li a{
    color: white;
    text-decoration: none;
  }
  .foot_part2{
    margin-top: 37px;
    border-left: 1px solid #b80000;
    margin-bottom: 30px;
    text-decoration: none;
  }
  .m_b1{
    margin-top: 47px;
    /* border-bottom: 1px solid #b80000; */
  }
  .m_b2{
    margin-top: 63px;
    /* border-bottom: 1px solid #b80000; */
  }
  .foot_part2 p a{
  
     color: white;
     margin-bottom: 0px;
     text-decoration: none;
     margin-left: 40px;
  }
  .foot_last{
    margin-top: 37px;
    border-left: 1px solid #b80000;
    margin-bottom: 34px;
  }
  .foot_last ul li a{
    color: white;
    text-decoration: none;
  }
.foot_last ul{

  list-style-type: none;
}
   /*footer end*/
  
  /*start content part 1*/
  .cont_1{
    background-color: #ededed82;
    padding: 8px;
    margin-bottom: 15px;
    height: 140px;

  }
  .cont_1:hover{
    box-shadow: 1px 1px 8px 1px darkgrey;
    transition: 2s;
  
  }

  .h_c{
    font-size: 2rem;
    padding: 2px;
    border-bottom: 3px solid red;
  }
  .h_csl{
    font-size: 2rem;
    padding: 2px;
    border-bottom: 3px solid red;
    margin-left: -15px;
    margin-right: -16px;
  }

/*content part বিনোদন start */
.cont_2{
    background-color: #f6f6f6;
    padding: 8px;
    margin-bottom: 30px;

  }
  .cont_2:hover{
    box-shadow: 1px 1px 8px 1px darkgrey;
    transition: 2s;

  }
  .h_c4{
    white-space: normal;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    color: rgba(0,0,0,.6);
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 2.375rem;
    letter-spacing: .0071428571em;
    font: bold; 
    font-size: 20px; 
    color: #060000; 
    border-bottom: 2px solid red;
  }
  .ptext{
    white-space: normal;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    color: rgba(0,0,0,.6);
    line-height: 1.2;
    font-size: .875rem;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    padding: 0px 10px 0px 10px;
    font-weight: 400;
    line-height: 1.375rem;
    letter-spacing: .0071428571em;
    text-align: justify;
  }

  .hov_b{
       transition: 1s;
  }
  .hov_b:hover{
        transform:scale(1.1);
        z-index: 2;
     }

  .h_c6{
    font: bold; 
    font-size: 20px; 
    color: white;
    border-bottom: 2px solid red;

     }
/*content part বিনোদন end */

/*part_6 start*/
.part_6_ro{
  margin-left: 5px;
  margin-right: 5px;

}
.part_6{
  margin-right: 5px;
}
.part_6_con{
  width: 423px;
  height: 294px;
  margin-bottom: 23px;
  display: flex;
  transition: 1s;
  background: round;

}
.part_6_con1{
  width: auto;
  height: 199px;
  margin-bottom: 23px;
  display: flex;
  transition: 1s;
  background: round;

}
.part_6_con11{
  width: 624px;
  height: 421px;
  background-image: cover;
  display: flex;
  background: round;
}

.test_p6{
  margin-top: 224px;
  padding: 19px;
  background: linear-gradient(transparent,rgb(0 0 0));
  color: white;
}
.test_spa{
  color: white;
  font-size: 15px;
  padding-top: 5px;
  white-space: normal;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  display: -webkit-box;
  line-height: 1.2;
  flex: 1 1 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  font-family: SolaimanLipi,AdorshoLipi,voice;
  /* padding-top: 10px; */
  font-weight: 400;
  line-height: 1.375rem;
  letter-spacing: .0071428571em;
}

.test2_p6{
    margin-top: 175px;
    padding: 0px 13px 0px 13px;
    background: linear-gradient(transparent,rgb(0 0 0));
    color: white;
    font-size: 13px;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    /* padding-top: 10px; */
    font-weight: 400;
    line-height: 1.375rem;
    letter-spacing: .0071428571em;
}
.test2_p6_first{
    margin-top:  97px;
    padding: 0px 8px 0px 8px;
    background: linear-gradient(transparent,rgb(0 0 0));
    color: white;
    font-size: 11px;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    /* padding-top: 10px; */
    font-weight: 400;
    line-height: 1.0rem;
    letter-spacing: .0071428571em;
}


.test2_p6_first span{

    background: linear-gradient(transparent,rgb(0 0 0));
    color: white;
    font-size: 15px;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    /* padding-top: 10px; */
    font-weight: 400;
    line-height: 1.0rem;
    letter-spacing: .0071428571em;
}

.h_p6{
    font: bold; 
    font-size: 15px; 
    color: white;
    border-bottom: 2px solid red;
    white-space: normal;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    padding-top: 10px;
    font-weight: 400;
    line-height: 2.375rem;
    letter-spacing: .0071428571em;

     }
     .h_p6_first{
      font-size: 19px;
      color: white;
      border-bottom: 2px solid red;
      white-space: normal;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      display: -webkit-box;
      line-height: 1.2;
      flex: 1 1 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      font-family: SolaimanLipi,AdorshoLipi,voice;
      padding-top: 10px;
      font-weight: 400;
      line-height: 1.375rem;
      letter-spacing: .0071428571em;
  
       }

  .part_6_con:hover{
      transform:scale(1.1);
      z-index: 2;
     }

/*part_6 end*/

/* video part start  */
.videoh3{
    font-size: 20px;
    white-space: normal;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    color: rgb(2 0 0);
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 2.0rem;
    letter-spacing: .0071428571em;
}

/* video part end */

/*marquee start*/
/* New */
.slide-marquee{
    background: linear-gradient(45deg,transparent,#6e7687);
    padding: 2px 5px;
    overflow: hidden;
    background-color: #b80000;
    width: 100%;
}
     .ul-list{
       list-style: none;

     }
     .li-list{
       display: inline-block;
       color: #fff;
       margin-right: 10px;
       font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .li-list a{
        text-decoration: none;
        font-family: SolaimanLipi,AdorshoLipi,voice;
     }
     .spot-anim {
       transform: translateX(-100%);
       will-change: transform;
       animation-duration: 50s;
       animation-timing-function: linear;
       animation-iteration-count: infinite;
       -webkit-animation-name: marquee;
       -moz-animation: marquee;
       -o-animation-name: marquee;
       animation-name: marquee;
        margin: 0 0;
        width: max-content;
     }
     .alert-spinner {
         width: 20px;
         height: 20px;
         display: inline-block;
         margin-right: 12px;
         position: relative;
         vertical-align: middle;
         margin-left: 5px;
         margin-top: 2px;
     }
     .list-alert-spinner{
        width: 13px;
        height: 13px;
        display: inline-block;
        margin-right: 12px;
        position: relative;
        vertical-align: middle;
        margin-left: 5px;
        margin-top: 2px;
     }
     .double-bounce {
         background: #fff;
         width: 100%;
         height: 100%;
         border-radius: 50%;
         position: absolute;
         top: -2px;
         left: 0;
     }
/* End */

.marbg{
    background: linear-gradient(45deg,transparent,#6e7687);
    background-color: #b80000;
    padding-top: 5px;
}
.marbg a{
  text-decoration: none;
}


    .marquee {
      height: 25px;
      width: 420px;

      overflow: hidden;
      position: relative;
    }

    .marquee div {
      display: block;
      width: 200%;
      height: 30px;

      position: absolute;
      overflow: hidden;

      animation: marquee 5s linear infinite;
    }

    .marquee span {
      float: left;
      width: 50%;
    }

    @keyframes marquee {
      0% { left: 0; }
      100% { left: -100%;}
    }

    .ajnews{
      color: white;
      margin-left: 10px;
    }
    .but_m{
      margin-right: -80px;
    }
    .media-body{flex:1}header{width:100%;z-index:99999;top:0px}@media (prefers-color-scheme: light){header.full-width{background:#fff}}@media (prefers-color-scheme: dark){header.full-width{background:#212529}}header.fixed{position:fixed}.mega-menu .header{flex:0 0 100%;max-width:100%;box-shadow:0 0.25rem 1rem rgba(0,0,0,0.15)}.mega-menu .header .container{padding-right:0px;padding-left:0px}
/* details page css start  */
.dh_2{
	color: #000000;
    font-size: 20px;
    border-bottom: 2px solid red;
    padding-bottom: 8px;
    margin-top: 195px;
}

.conh{
	  font-size: 18px;
    white-space: normal;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    color: rgb(2 0 0);
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 2.0rem;
    letter-spacing: .0071428571em;
}

.conp{
	font-size: 15px;
    color: #aba8a8d4;
    text-align: justify;
    white-space: normal;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    line-height: 1.2;
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: SolaimanLipi,AdorshoLipi,voice;
    font-weight: 400;
    line-height: 1.0rem;
    letter-spacing: .0071428571em;
}

  .dtext{
    text-align: justify;
    font-family: SolaimanLipi,AdorshoLipi,voice;
  }

  .date_text{
    color: #6a5d5d94
  }
  .cat_d_h2{
    border-bottom: 2px solid #ff0000;
    padding-bottom: 5px;
    font-size: 24px;
    margin-bottom: 28px;
  }

  .h_csl_det{
    font-size: 2rem;
    padding: 2px;
    border-bottom: 3px solid red;
    margin-left: -15px;
    margin-top: 0px;
  }
  .h_csl_det2{
    font-size: 2rem;
    padding: 2px;
    border-bottom: 3px solid red;
    margin-right: -16px;
    margin-top: 0px;
  }

  .part_6_con11_det{
  width: 495px;
  height: 401px;
  background-image: cover;
  display: flex;
  background: round;
  margin-bottom: 10px;
}

.det_mb{
  margin-bottom: 20px;
  border-bottom: 1px solid #f1f1f1;
}
/* details page css end  */

/* category page start  */
.dh_2_cat{
	  color: #000000;
    font-size: 20px;
    border-bottom: 2px solid red;
    padding-bottom: 8px;
}
/* category page end  */


/* amp responsive part start */
@media (max-width: 768px){

 .ajnews{
      display: none;
    }
    .so-icon{
      display: none;
    
    }
    .P_part1{
      display:none;
    }
.P_part{
  padding-bottom: 15px;
}

.logop{
 
  margin-right: 0px;
}
.logo_img{
    width: 122px;
    height: 38px;
    margin-top: 28px;
}

.logo_p_taxt{
  margin-top: 35px;
}
.part_6_con11{
  width: 497px;
  height: 319px;
}
.test_p6{
  margin-top: 168px;
}
.detr{
  margin-top: 60px;
}
.part_6_con1{
  width: auto;
  height: 148px;
}

.res_4{
  margin-left: 162px;
  width: 63.333333%;
}
.test2_p6_first{
  margin-top: 45px;
}

/* details page responsive start  */
.part_6_con11_det{
    width: 256px;
    height: 210px;
}

/* details page responsive end  */
/* footer responsive start  */
.logo_img_foot{
  margin-top: 54px;
  margin-left: -12px;
  height: 40px;
  width: 80px;

}
/* footer responsive end */

}





@media (min-width: 576px){}
@media (min-width: 768px){}
@media (min-width: 992px){}
@media (min-width: 1auto){}

/* amp responsive part end */    
</style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <link rel="canonical" href=".">

    <title>Nwes2</title>