<style>
@charset 'UTF-8'; /*!

=========================================================
* Argon Dashboard - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
:root {
    --blue: #11cdef;
    --indigo: #5603ad;
    --purple: #8965e0;
    --pink: #f3a4b5;
    --red: #f5365c;
    --orange: #fb6340;
    --yellow: #ffd600;
    --green: #2dce89;
    --teal: #11cdef;
    --cyan: #2bffc6;
    --white: #fff;
    --gray: #8898aa;
    --gray-dark: #32325d;
    --lighter: #e9ecef;
    --bs-body-color: #525f7f;
    --bs-primary: #5e72e4;
    --bs-secondary: #f7fafc;
    --bs-success: #2dce89;
    --bs-info: #11cdef;
    --bs-warning: #fb6340;
    --bs-danger: #f5365c;
    --bs-light: #ced4da;
    --bs-dark: #212529;
    --default: #172b4d;
    --white: #fff;
    --neutral: #fff;
    --darker: black;
    --bs-gradient-primary-right: #5e72e4;
    --bs-gradient-primary-left: #825ee4;
    --bs-gradient-info-right: #11cdef;
    --bs-gradient-info-left: #1171ef;
    --bs-gradient-danger-right: #f5365c;
    --bs-gradient-danger-left: #f56036;
    --bs-gradient-warning-right: #fb6340;
    --bs-gradient-warning-left: #fbb140;
    --bs-gradient-success-right: #2dce89;
    --bs-gradient-success-left: #2dcecc;
    --bs-gradient-secondary-right: #f7fafc;
    --bs-gradient-secondary-left: #f7f8fc;
    --bs-gradient-dark-right: #212529;
    --bs-gradient-dark-left: #212229;
    --bs-gradient-light-right: #ced4da;
    --bs-gradient-light-left: #cecfda;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: Open Sans, sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
*,
::after,
::before {
    box-sizing: border-box;
}
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block;
}
body {
    font-family: Open Sans, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
    text-align: left;
    color: var(--bs-body-color);
    background-color: #f8f9fe;
}
[tabindex="-1"]:focus:not(:focus-visible) {
    outline: 0 !important;
}
hr {
    overflow: visible;
    box-sizing: content-box;
    height: 0;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
abbr[data-original-title],
abbr[title] {
    cursor: help;
    text-decoration: underline;
    text-decoration: underline dotted;
    border-bottom: 0;
    -webkit-text-decoration: underline dotted;
    text-decoration-skip-ink: none;
}
address {
    font-style: normal;
    line-height: inherit;
    margin-bottom: 1rem;
}
dl,
ol,
ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0;
}
dt {
    font-weight: 600;
}
dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}
blockquote {
    margin: 0 0 1rem;
}
b,
strong {
    font-weight: bolder;
}
small {
    font-size: 80%;
}
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sub {
    bottom: -0.25em;
}
sup {
    top: -0.5em;
}
a {
    text-decoration: none;
    color: var(--bs-primary);
    background-color: transparent;
}
a:hover {
    text-decoration: none;
    color: #233dd2;
}
a:not([href]) {
    text-decoration: none;
    color: inherit;
}
a:not([href]):hover {
    text-decoration: none;
    color: inherit;
}
code,
kbd,
pre,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em;
}
pre {
    overflow: auto;
    margin-top: 0;
    margin-bottom: 1rem;
}
figure {
    margin: 0 0 1rem;
}
img {
    vertical-align: middle;
    border-style: none;
}
svg {
    overflow: hidden;
    vertical-align: middle;
}
table {
    border-collapse: collapse;
}
caption {
    padding-top: 1rem;
    padding-bottom: 1rem;
    caption-side: bottom;
    text-align: left;
    color: #8898aa;
}
th {
    text-align: inherit;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
button {
    border-radius: 0;
}
button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}
button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
}
button,
input {
    overflow: visible;
}
button,
select {
    text-transform: none;
}
select {
    word-wrap: normal;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
    -webkit-appearance: button;
}
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
    cursor: pointer;
}
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner,
button::-moz-focus-inner {
    padding: 0;
    border-style: none;
}
input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
}
input[type="date"],
input[type="datetime-local"],
input[type="month"],
input[type="time"] {
    -webkit-appearance: listbox;
}
textarea {
    overflow: auto;
    resize: vertical;
}
fieldset {
    min-width: 0;
    margin: 0;
    padding: 0;
    border: 0;
}
legend {
    font-size: 1.5rem;
    line-height: inherit;
    display: block;
    width: 100%;
    max-width: 100%;
    margin-bottom: 0.5rem;
    padding: 0;
    white-space: normal;
    color: inherit;
}
@media (max-width: 1200px) {
    legend {
        font-size: calc(1.275rem + 0.3vw);
    }
}
progress {
    vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}
[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}
[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}
::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}
output {
    display: inline-block;
}
summary {
    display: list-item;
    cursor: pointer;
}
template {
    display: none;
}
[hidden] {
    display: none !important;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0.5rem;
    color: #32325d;
}
.h1,
h1 {
    font-size: 1.625rem;
}
@media (max-width: 1200px) {
    .h1,
    h1 {
        font-size: calc(1.2875rem + 0.45vw);
    }
}
.h2,
h2 {
    font-size: 1.25rem;
}
.h3,
h3 {
    font-size: 1.0625rem;
}
.h4,
h4 {
    font-size: 0.9375rem;
}
.h5,
h5 {
    font-size: 0.8125rem;
}
.h6,
h6 {
    font-size: 0.625rem;
}
.lead {
    font-size: 1.25rem;
    font-weight: 300;
}
.display-1 {
    font-size: 3.3rem;
    font-weight: 600;
    line-height: 1.5;
}
@media (max-width: 1200px) {
    .display-1 {
        font-size: calc(1.455rem + 2.46vw);
    }
}
.display-2 {
    font-size: 2.75rem;
    font-weight: 600;
    line-height: 1.5;
}
@media (max-width: 1200px) {
    .display-2 {
        font-size: calc(1.4rem + 1.8vw);
    }
}
.display-3 {
    font-size: 2.1875rem;
    font-weight: 600;
    line-height: 1.5;
}
@media (max-width: 1200px) {
    .display-3 {
        font-size: calc(1.34375rem + 1.125vw);
    }
}
.display-4 {
    font-size: 1.6275rem;
    font-weight: 600;
    line-height: 1.5;
}
@media (max-width: 1200px) {
    .display-4 {
        font-size: calc(1.28775rem + 0.453vw);
    }
}
hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.small,
small {
    font-size: 80%;
    font-weight: 400;
}
.mark,
mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.list-inline {
    padding-left: 0;
    list-style: none;
}
.list-inline-item {
    display: inline-block;
}
.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}
.initialism {
    font-size: 90%;
    text-transform: uppercase;
}
.blockquote {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}
.blockquote-footer {
    font-size: 80%;
    display: block;
    color: #8898aa;
}
.blockquote-footer::before {
    content: "\2014\00A0";
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
.img-thumbnail {
    max-width: 100%;
    height: auto;
    padding: 0.25rem;
    border: 1px solid #dee2e6;
    border-radius: 0.375rem;
    background-color: #f8f9fe;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
}
.figure {
    display: inline-block;
}
.figure-img {
    line-height: 1;
    margin-bottom: 0.5rem;
}
.figure-caption {
    font-size: 90%;
    color: #8898aa;
}
code {
    font-size: 87.5%;
    word-wrap: break-word;
    color: #f3a4b5;
}
a > code {
    color: inherit;
}
kbd {
    font-size: 87.5%;
    padding: 0.2rem 0.4rem;
    color: #fff;
    border-radius: 0.25rem;
    background-color: #212529;
    box-shadow: inset 0 -0.1rem 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
    font-size: 100%;
    font-weight: 600;
    padding: 0;
    box-shadow: none;
}
pre {
    font-size: 87.5%;
    display: block;
    color: #212529;
}
pre code {
    font-size: inherit;
    word-break: normal;
    color: inherit;
}
.pre-scrollable {
    overflow-y: scroll;
    max-height: 340px;
}
.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px) {
    .container,
    .container-sm {
        max-width: 540px;
    }
}
@media (min-width: 768px) {
    .container,
    .container-md,
    .container-sm {
        max-width: 720px;
    }
}
@media (min-width: 992px) {
    .container,
    .container-lg,
    .container-md,
    .container-sm {
        max-width: 960px;
    }
}
@media (min-width: 1200px) {
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        max-width: 1140px;
    }
}
.row {
    display: flex;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: wrap;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}
.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.col {
    max-width: 100%;
    flex-basis: 0;
    flex-grow: 1;
}
.row-cols-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
}
.row-cols-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
}
.row-cols-3 > * {
    max-width: 33.33333%;
    flex: 0 0 33.33333%;
}
.row-cols-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
}
.row-cols-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
}
.row-cols-6 > * {
    max-width: 16.66667%;
    flex: 0 0 16.66667%;
}
.col-auto {
    width: auto;
    max-width: 100%;
    flex: 0 0 auto;
}
.col-1 {
    max-width: 8.33333%;
    flex: 0 0 8.33333%;
}
.col-2 {
    max-width: 16.66667%;
    flex: 0 0 16.66667%;
}
.col-3 {
    max-width: 25%;
    flex: 0 0 25%;
}
.col-4 {
    max-width: 33.33333%;
    flex: 0 0 33.33333%;
}
.col-5 {
    max-width: 41.66667%;
    flex: 0 0 41.66667%;
}
.col-6 {
    max-width: 50%;
    flex: 0 0 50%;
}
.col-7 {
    max-width: 58.33333%;
    flex: 0 0 58.33333%;
}
.col-8 {
    max-width: 66.66667%;
    flex: 0 0 66.66667%;
}
.col-9 {
    max-width: 75%;
    flex: 0 0 75%;
}
.col-10 {
    max-width: 83.33333%;
    flex: 0 0 83.33333%;
}
.col-11 {
    max-width: 91.66667%;
    flex: 0 0 91.66667%;
}
.col-12 {
    max-width: 100%;
    flex: 0 0 100%;
}
.order-first {
    order: -1;
}
.order-last {
    order: 13;
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
.order-6 {
    order: 6;
}
.order-7 {
    order: 7;
}
.order-8 {
    order: 8;
}
.order-9 {
    order: 9;
}
.order-10 {
    order: 10;
}
.order-11 {
    order: 11;
}
.order-12 {
    order: 12;
}
.offset-1 {
    margin-left: 8.33333%;
}
.offset-2 {
    margin-left: 16.66667%;
}
.offset-3 {
    margin-left: 25%;
}
.offset-4 {
    margin-left: 33.33333%;
}
.offset-5 {
    margin-left: 41.66667%;
}
.offset-6 {
    margin-left: 50%;
}
.offset-7 {
    margin-left: 58.33333%;
}
.offset-8 {
    margin-left: 66.66667%;
}
.offset-9 {
    margin-left: 75%;
}
.offset-10 {
    margin-left: 83.33333%;
}
.offset-11 {
    margin-left: 91.66667%;
}
@media (min-width: 576px) {
    .col-sm {
        max-width: 100%;
        flex-basis: 0;
        flex-grow: 1;
    }
    .row-cols-sm-1 > * {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .row-cols-sm-2 > * {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .row-cols-sm-3 > * {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .row-cols-sm-4 > * {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .row-cols-sm-5 > * {
        max-width: 20%;
        flex: 0 0 20%;
    }
    .row-cols-sm-6 > * {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-sm-auto {
        width: auto;
        max-width: 100%;
        flex: 0 0 auto;
    }
    .col-sm-1 {
        max-width: 8.33333%;
        flex: 0 0 8.33333%;
    }
    .col-sm-2 {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-sm-3 {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .col-sm-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .col-sm-5 {
        max-width: 41.66667%;
        flex: 0 0 41.66667%;
    }
    .col-sm-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .col-sm-7 {
        max-width: 58.33333%;
        flex: 0 0 58.33333%;
    }
    .col-sm-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }
    .col-sm-9 {
        max-width: 75%;
        flex: 0 0 75%;
    }
    .col-sm-10 {
        max-width: 83.33333%;
        flex: 0 0 83.33333%;
    }
    .col-sm-11 {
        max-width: 91.66667%;
        flex: 0 0 91.66667%;
    }
    .col-sm-12 {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .order-sm-first {
        order: -1;
    }
    .order-sm-last {
        order: 13;
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
    .order-sm-6 {
        order: 6;
    }
    .order-sm-7 {
        order: 7;
    }
    .order-sm-8 {
        order: 8;
    }
    .order-sm-9 {
        order: 9;
    }
    .order-sm-10 {
        order: 10;
    }
    .order-sm-11 {
        order: 11;
    }
    .order-sm-12 {
        order: 12;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.33333%;
    }
    .offset-sm-2 {
        margin-left: 16.66667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.33333%;
    }
    .offset-sm-5 {
        margin-left: 41.66667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.33333%;
    }
    .offset-sm-8 {
        margin-left: 66.66667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.33333%;
    }
    .offset-sm-11 {
        margin-left: 91.66667%;
    }
}
@media (min-width: 768px) {
    .col-md {
        max-width: 100%;
        flex-basis: 0;
        flex-grow: 1;
    }
    .row-cols-md-1 > * {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .row-cols-md-2 > * {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .row-cols-md-3 > * {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .row-cols-md-4 > * {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .row-cols-md-5 > * {
        max-width: 20%;
        flex: 0 0 20%;
    }
    .row-cols-md-6 > * {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-md-auto {
        width: auto;
        max-width: 100%;
        flex: 0 0 auto;
    }
    .col-md-1 {
        max-width: 8.33333%;
        flex: 0 0 8.33333%;
    }
    .col-md-2 {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-md-3 {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .col-md-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .col-md-5 {
        max-width: 41.66667%;
        flex: 0 0 41.66667%;
    }
    .col-md-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .col-md-7 {
        max-width: 58.33333%;
        flex: 0 0 58.33333%;
    }
    .col-md-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }
    .col-md-9 {
        max-width: 75%;
        flex: 0 0 75%;
    }
    .col-md-10 {
        max-width: 83.33333%;
        flex: 0 0 83.33333%;
    }
    .col-md-11 {
        max-width: 91.66667%;
        flex: 0 0 91.66667%;
    }
    .col-md-12 {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .order-md-first {
        order: -1;
    }
    .order-md-last {
        order: 13;
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
    .order-md-6 {
        order: 6;
    }
    .order-md-7 {
        order: 7;
    }
    .order-md-8 {
        order: 8;
    }
    .order-md-9 {
        order: 9;
    }
    .order-md-10 {
        order: 10;
    }
    .order-md-11 {
        order: 11;
    }
    .order-md-12 {
        order: 12;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.33333%;
    }
    .offset-md-2 {
        margin-left: 16.66667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.33333%;
    }
    .offset-md-5 {
        margin-left: 41.66667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.33333%;
    }
    .offset-md-8 {
        margin-left: 66.66667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.33333%;
    }
    .offset-md-11 {
        margin-left: 91.66667%;
    }
}
@media (min-width: 992px) {
    .col-lg {
        max-width: 100%;
        flex-basis: 0;
        flex-grow: 1;
    }
    .row-cols-lg-1 > * {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .row-cols-lg-2 > * {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .row-cols-lg-3 > * {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .row-cols-lg-4 > * {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .row-cols-lg-5 > * {
        max-width: 20%;
        flex: 0 0 20%;
    }
    .row-cols-lg-6 > * {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-lg-auto {
        width: auto;
        max-width: 100%;
        flex: 0 0 auto;
    }
    .col-lg-1 {
        max-width: 8.33333%;
        flex: 0 0 8.33333%;
    }
    .col-lg-2 {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-lg-3 {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .col-lg-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .col-lg-5 {
        max-width: 41.66667%;
        flex: 0 0 41.66667%;
    }
    .col-lg-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .col-lg-7 {
        max-width: 58.33333%;
        flex: 0 0 58.33333%;
    }
    .col-lg-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }
    .col-lg-9 {
        max-width: 75%;
        flex: 0 0 75%;
    }
    .col-lg-10 {
        max-width: 83.33333%;
        flex: 0 0 83.33333%;
    }
    .col-lg-11 {
        max-width: 91.66667%;
        flex: 0 0 91.66667%;
    }
    .col-lg-12 {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .order-lg-first {
        order: -1;
    }
    .order-lg-last {
        order: 13;
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
    .order-lg-6 {
        order: 6;
    }
    .order-lg-7 {
        order: 7;
    }
    .order-lg-8 {
        order: 8;
    }
    .order-lg-9 {
        order: 9;
    }
    .order-lg-10 {
        order: 10;
    }
    .order-lg-11 {
        order: 11;
    }
    .order-lg-12 {
        order: 12;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.33333%;
    }
    .offset-lg-2 {
        margin-left: 16.66667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.33333%;
    }
    .offset-lg-5 {
        margin-left: 41.66667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.33333%;
    }
    .offset-lg-8 {
        margin-left: 66.66667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.33333%;
    }
    .offset-lg-11 {
        margin-left: 91.66667%;
    }
}
@media (min-width: 1200px) {
    .col-xl {
        max-width: 100%;
        flex-basis: 0;
        flex-grow: 1;
    }
    .row-cols-xl-1 > * {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .row-cols-xl-2 > * {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .row-cols-xl-3 > * {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .row-cols-xl-4 > * {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .row-cols-xl-5 > * {
        max-width: 20%;
        flex: 0 0 20%;
    }
    .row-cols-xl-6 > * {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-xl-auto {
        width: auto;
        max-width: 100%;
        flex: 0 0 auto;
    }
    .col-xl-1 {
        max-width: 8.33333%;
        flex: 0 0 8.33333%;
    }
    .col-xl-2 {
        max-width: 16.66667%;
        flex: 0 0 16.66667%;
    }
    .col-xl-3 {
        max-width: 25%;
        flex: 0 0 25%;
    }
    .col-xl-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
    .col-xl-5 {
        max-width: 41.66667%;
        flex: 0 0 41.66667%;
    }
    .col-xl-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
    .col-xl-7 {
        max-width: 58.33333%;
        flex: 0 0 58.33333%;
    }
    .col-xl-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }
    .col-xl-9 {
        max-width: 75%;
        flex: 0 0 75%;
    }
    .col-xl-10 {
        max-width: 83.33333%;
        flex: 0 0 83.33333%;
    }
    .col-xl-11 {
        max-width: 91.66667%;
        flex: 0 0 91.66667%;
    }
    .col-xl-12 {
        max-width: 100%;
        flex: 0 0 100%;
    }
    .order-xl-first {
        order: -1;
    }
    .order-xl-last {
        order: 13;
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
    .order-xl-6 {
        order: 6;
    }
    .order-xl-7 {
        order: 7;
    }
    .order-xl-8 {
        order: 8;
    }
    .order-xl-9 {
        order: 9;
    }
    .order-xl-10 {
        order: 10;
    }
    .order-xl-11 {
        order: 11;
    }
    .order-xl-12 {
        order: 12;
    }
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.33333%;
    }
    .offset-xl-2 {
        margin-left: 16.66667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.33333%;
    }
    .offset-xl-5 {
        margin-left: 41.66667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.33333%;
    }
    .offset-xl-8 {
        margin-left: 66.66667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.33333%;
    }
    .offset-xl-11 {
        margin-left: 91.66667%;
    }
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-body-color);
    background-color: transparent;
}
.table td,
.table th {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #e9ecef;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e9ecef;
}
.table tbody + tbody {
    border-top: 2px solid #e9ecef;
}
.table-sm td,
.table-sm th {
    padding: 0.5rem;
}
.table-bordered {
    border: 1px solid #e9ecef;
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #e9ecef;
}
.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px;
}
.table-borderless tbody + tbody,
.table-borderless td,
.table-borderless th,
.table-borderless thead th {
    border: 0;
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(246, 249, 252, 0.3);
}
.table-hover tbody tr:hover {
    color: var(--bs-body-color);
    background-color: #f6f9fc;
}
.table-primary,
.table-primary > td,
.table-primary > th {
    background-color: #d2d8f7;
}
.table-primary tbody + tbody,
.table-primary td,
.table-primary th,
.table-primary thead th {
    border-color: #abb6f1;
}
.table-hover .table-primary:hover {
    background-color: #bcc5f3;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
    background-color: #bcc5f3;
}
.table-secondary,
.table-secondary > td,
.table-secondary > th {
    background-color: #fdfefe;
}
.table-secondary tbody + tbody,
.table-secondary td,
.table-secondary th,
.table-secondary thead th {
    border-color: #fbfcfd;
}
.table-hover .table-secondary:hover {
    background-color: #ecf6f6;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
    background-color: #ecf6f6;
}
.table-success,
.table-success > td,
.table-success > th {
    background-color: #c4f1de;
}
.table-success tbody + tbody,
.table-success td,
.table-success th,
.table-success thead th {
    border-color: #92e6c2;
}
.table-hover .table-success:hover {
    background-color: #afecd2;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
    background-color: #afecd2;
}
.table-info,
.table-info > td,
.table-info > th {
    background-color: #bcf1fb;
}
.table-info tbody + tbody,
.table-info td,
.table-info th,
.table-info thead th {
    border-color: #83e5f7;
}
.table-hover .table-info:hover {
    background-color: #a4ecfa;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
    background-color: #a4ecfa;
}
.table-warning,
.table-warning > td,
.table-warning > th {
    background-color: #fed3ca;
}
.table-warning tbody + tbody,
.table-warning td,
.table-warning th,
.table-warning thead th {
    border-color: #fdae9c;
}
.table-hover .table-warning:hover {
    background-color: #febeb1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
    background-color: #febeb1;
}
.table-danger,
.table-danger > td,
.table-danger > th {
    background-color: #fcc7d1;
}
.table-danger tbody + tbody,
.table-danger td,
.table-danger th,
.table-danger thead th {
    border-color: #fa96aa;
}
.table-hover .table-danger:hover {
    background-color: #fbafbd;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
    background-color: #fbafbd;
}
.table-light,
.table-light > td,
.table-light > th {
    background-color: #e8eaed;
}
.table-light tbody + tbody,
.table-light td,
.table-light th,
.table-light thead th {
    border-color: #d4d9dd;
}
.table-hover .table-light:hover {
    background-color: #dadde2;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
    background-color: #dadde2;
}
.table-dark,
.table-dark > td,
.table-dark > th {
    background-color: #c1c2c3;
}
.table-dark tbody + tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #8c8e90;
}
.table-hover .table-dark:hover {
    background-color: #b4b5b6;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
    background-color: #b4b5b6;
}
.table-default,
.table-default > td,
.table-default > th {
    background-color: #bec4cd;
}
.table-default tbody + tbody,
.table-default td,
.table-default th,
.table-default thead th {
    border-color: #8691a2;
}
.table-hover .table-default:hover {
    background-color: #b0b7c2;
}
.table-hover .table-default:hover > td,
.table-hover .table-default:hover > th {
    background-color: #b0b7c2;
}
.table-white,
.table-white > td,
.table-white > th {
    background-color: #fff;
}
.table-white tbody + tbody,
.table-white td,
.table-white th,
.table-white thead th {
    border-color: #fff;
}
.table-hover .table-white:hover {
    background-color: #f2f2f2;
}
.table-hover .table-white:hover > td,
.table-hover .table-white:hover > th {
    background-color: #f2f2f2;
}
.table-neutral,
.table-neutral > td,
.table-neutral > th {
    background-color: #fff;
}
.table-neutral tbody + tbody,
.table-neutral td,
.table-neutral th,
.table-neutral thead th {
    border-color: #fff;
}
.table-hover .table-neutral:hover {
    background-color: #f2f2f2;
}
.table-hover .table-neutral:hover > td,
.table-hover .table-neutral:hover > th {
    background-color: #f2f2f2;
}
.table-darker,
.table-darker > td,
.table-darker > th {
    background-color: #b8b8b8;
}
.table-darker tbody + tbody,
.table-darker td,
.table-darker th,
.table-darker thead th {
    border-color: #7a7a7a;
}
.table-hover .table-darker:hover {
    background-color: #ababab;
}
.table-hover .table-darker:hover > td,
.table-hover .table-darker:hover > th {
    background-color: #ababab;
}
.table-active,
.table-active > td,
.table-active > th {
    background-color: #f6f9fc;
}
.table-hover .table-active:hover {
    background-color: #e3ecf6;
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
    background-color: #e3ecf6;
}
.table .thead-dark th {
    color: #f8f9fe;
    border-color: #1f3a68;
    background-color: #172b4d;
}
.table .thead-light th {
    color: #8898aa;
    border-color: #e9ecef;
    background-color: #f6f9fc;
}
.table-dark {
    color: #f8f9fe;
    background-color: #172b4d;
}
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #1f3a68;
}
.table-dark.table-bordered {
    border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
    color: #f8f9fe;
    background-color: rgba(255, 255, 255, 0.075);
}
@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        overflow-x: auto;
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-sm > .table-bordered {
        border: 0;
    }
}
@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        overflow-x: auto;
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-md > .table-bordered {
        border: 0;
    }
}
@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        overflow-x: auto;
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-lg > .table-bordered {
        border: 0;
    }
}
@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        overflow-x: auto;
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }
    .table-responsive-xl > .table-bordered {
        border: 0;
    }
}
.table-responsive {
    display: block;
    overflow-x: auto;
    width: 100%;
    -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
    border: 0;
}
.form-control {
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    display: block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 0.75rem;
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}
.form-control::-ms-expand {
    border: 0;
    background-color: transparent;
}
.form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #8898aa;
}
.form-control:focus {
    color: #8898aa;
    border-color: var(--bs-primary);
    outline: 0;
    background-color: #fff;
    box-shadow: 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.form-control::-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
}
.form-control::placeholder {
    opacity: 1;
    color: #adb5bd;
}
.form-control:disabled,
.form-control[readonly] {
    opacity: 1;
    background-color: #e9ecef;
}
select.form-control:focus::-ms-value {
    color: #8898aa;
    background-color: #fff;
}
.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}
.col-form-label {
    font-size: inherit;
    line-height: 1.5;
    margin-bottom: 0;
    padding-top: calc(0.625rem + 1px);
    padding-bottom: calc(0.625rem + 1px);
}
.col-form-label-lg {
    font-size: 0.875rem;
    line-height: 1.5;
    padding-top: calc(0.875rem + 1px);
    padding-bottom: calc(0.875rem + 1px);
}
.col-form-label-sm {
    font-size: 0.75rem;
    line-height: 1.5;
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
}
.form-control-plaintext {
    font-size: 0.875rem;
    line-height: 1.5;
    display: block;
    width: 100%;
    margin-bottom: 0;
    padding: 0.625rem 0;
    color: var(--bs-body-color);
    border: solid transparent;
    border-width: 1px 0;
    background-color: transparent;
}
.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
    padding-right: 0;
    padding-left: 0;
}
.form-control-sm {
    font-size: 0.75rem;
    line-height: 1.5;
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
}
.form-control-lg {
    font-size: 0.875rem;
    line-height: 1.5;
    height: calc(1.5em + 1.75rem + 2px);
    padding: 0.875rem 1rem;
    border-radius: 0.4375rem;
}
select.form-control[multiple],
select.form-control[size] {
    height: auto;
}
textarea.form-control {
    height: auto;
}
.form-group {
    margin-bottom: 1.5rem;
}
.form-text {
    display: block;
    margin-top: 0.25rem;
}
.form-row {
    display: flex;
    margin-right: -5px;
    margin-left: -5px;
    flex-wrap: wrap;
}
.form-row > .col,
.form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}
.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}
.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label,
.form-check-input[disabled] ~ .form-check-label {
    color: #8898aa;
}
.form-check-label {
    margin-bottom: 0;
}
.form-check-inline {
    display: inline-flex;
    margin-right: 0.75rem;
    padding-left: 0;
    align-items: center;
}
.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}
.valid-feedback {
    font-size: 80%;
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    color: var(--bs-success);
}
.valid-tooltip {
    font-size: 0.875rem;
    line-height: 1;
    position: absolute;
    z-index: 5;
    top: 100%;
    display: none;
    max-width: 100%;
    margin-top: 0.1rem;
    padding: 0.5rem;
    color: #fff;
    border-radius: 0.2rem;
    background-color: rgba(45, 206, 137, 0.8);
}
.custom-select.is-valid,
.form-control.is-valid,
.was-validated .custom-select:valid,
.was-validated .form-control:valid {
    border-color: var(--bs-success);
}
.custom-select.is-valid:focus,
.form-control.is-valid:focus,
.was-validated .custom-select:valid:focus,
.was-validated .form-control:valid:focus {
    border-color: var(--bs-success);
}
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip,
.form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip,
.was-validated .custom-select:valid ~ .valid-feedback,
.was-validated .custom-select:valid ~ .valid-tooltip,
.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip {
    display: block;
}
.form-check-input.is-valid ~ .form-check-label,
.was-validated .form-check-input:valid ~ .form-check-label {
    color: var(--bs-success);
}
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip,
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-control-input.is-valid ~ .custom-control-label,
.was-validated .custom-control-input:valid ~ .custom-control-label {
    color: var(--bs-success);
}
.custom-control-input.is-valid ~ .custom-control-label::before,
.was-validated .custom-control-input:valid ~ .custom-control-label::before {
    border-color: #93e7c3;
    background-color: #93e7c3;
}
.custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip,
.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-control-input.is-valid:checked ~ .custom-control-label::before,
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before {
    border-color: #93e7c3;
    background-color: #54daa1;
}
.custom-control-input.is-valid:focus ~ .custom-control-label::before,
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #f8f9fe, 0 0 0 0 rgba(45, 206, 137, 0.25);
}
.custom-file-input {
    width: 60% !important;
    margin: 8px !important;
    opacity: 1 !important;
}
.custom-file-input.is-valid ~ .custom-file-label,
.was-validated .custom-file-input:valid ~ .custom-file-label {
    border-color: var(--bs-success);
}
.custom-file-input.is-valid ~ .custom-file-label::before,
.was-validated .custom-file-input:valid ~ .custom-file-label::before {
    border-color: inherit;
}
.custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip,
.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip {
    display: block;
}
.custom-file-input.is-valid:focus ~ .custom-file-label,
.was-validated .custom-file-input:valid:focus ~ .custom-file-label {
    box-shadow: 0 0 0 0 rgba(45, 206, 137, 0.25);
}
.custom-file-input:focus {
    outline: 0;
}
.invalid-feedback {
    font-size: 80%;
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    color: var(--bs-warning);
}
.invalid-tooltip {
    font-size: 0.875rem;
    line-height: 1;
    position: absolute;
    z-index: 5;
    top: 100%;
    display: none;
    max-width: 100%;
    margin-top: 0.1rem;
    padding: 0.5rem;
    color: #fff;
    border-radius: 0.2rem;
    background-color: rgba(251, 99, 64, 0.8);
}
.custom-select.is-invalid,
.form-control.is-invalid,
.was-validated .custom-select:invalid,
.was-validated .form-control:invalid {
    border-color: var(--bs-warning);
}
.custom-select.is-invalid:focus,
.form-control.is-invalid:focus,
.was-validated .custom-select:invalid:focus,
.was-validated .form-control:invalid:focus {
    border-color: var(--bs-warning);
}
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip,
.form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip,
.was-validated .custom-select:invalid ~ .invalid-feedback,
.was-validated .custom-select:invalid ~ .invalid-tooltip,
.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip {
    display: block;
}
.form-check-input.is-invalid ~ .form-check-label,
.was-validated .form-check-input:invalid ~ .form-check-label {
    color: var(--bs-warning);
}
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip,
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-control-input.is-invalid ~ .custom-control-label,
.was-validated .custom-control-input:invalid ~ .custom-control-label {
    color: var(--bs-warning);
}
.custom-control-input.is-invalid ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid ~ .custom-control-label::before {
    border-color: #fec9bd;
    background-color: #fec9bd;
}
.custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip,
.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-control-input.is-invalid:checked ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before {
    border-color: #fec9bd;
    background-color: #fc8c72;
}
.custom-control-input.is-invalid:focus ~ .custom-control-label::before,
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #f8f9fe, 0 0 0 0 rgba(251, 99, 64, 0.25);
}
.custom-file-input {
    width: 60% !important;
    margin: 8px !important;
    opacity: 1 !important;
}
.custom-file-input.is-invalid ~ .custom-file-label,
.was-validated .custom-file-input:invalid ~ .custom-file-label {
    border-color: var(--bs-warning);
}
.custom-file-input.is-invalid ~ .custom-file-label::before,
.was-validated .custom-file-input:invalid ~ .custom-file-label::before {
    border-color: inherit;
}
.custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip,
.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip {
    display: block;
}
.custom-file-input.is-invalid:focus ~ .custom-file-label,
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
    box-shadow: 0 0 0 0 rgba(251, 99, 64, 0.25);
}
.custom-file-input:focus {
    outline: 0;
}
.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}
.form-inline .form-check {
    width: 100%;
}
@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        margin-bottom: 0;
        align-items: center;
        justify-content: center;
    }
    .form-inline .form-group {
        display: flex;
        margin-bottom: 0;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .form-inline .form-control-plaintext {
        display: inline-block;
    }
    .form-inline .custom-select,
    .form-inline .input-group {
        width: auto;
    }
    .form-inline .form-check {
        display: flex;
        width: auto;
        padding-left: 0;
        align-items: center;
        justify-content: center;
    }
    .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
        flex-shrink: 0;
    }
    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }
    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}
.btn {
    font-size: 0.875rem;
    font-weight: 600;
    line-height: 1.5;
    display: inline-block;
    padding: 0.625rem 1.25rem;
    cursor: pointer;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-align: center;
    vertical-align: middle;
    color: var(--bs-body-color);
    border: 1px solid transparent;
    border-radius: 0.25rem;
    background-color: transparent;
}
@media (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}
.btn:hover {
    text-decoration: none;
    color: var(--bs-body-color);
}
.btn.focus,
.btn:focus {
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
.btn.disabled,
.btn:disabled {
    opacity: 0.65;
    box-shadow: none;
}
.btn:not(:disabled):not(.disabled).active,
.btn:not(:disabled):not(.disabled):active {
    box-shadow: none;
}
.btn:not(:disabled):not(.disabled).active:focus,
.btn:not(:disabled):not(.disabled):active:focus {
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}
.btn-primary {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-primary:hover {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.btn-primary.focus,
.btn-primary:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.btn-primary.disabled,
.btn-primary:disabled {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show > .btn-primary.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: #324cdd;
}
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-primary.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.btn-secondary {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-secondary:hover {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
}
.btn-secondary.focus,
.btn-secondary:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(247, 250, 252, 0.5);
}
.btn-secondary.disabled,
.btn-secondary:disabled {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
}
.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show > .btn-secondary.dropdown-toggle {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: #d2e3ee;
}
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(247, 250, 252, 0.5);
}
.btn-success {
    color: #fff;
    border-color: var(--bs-success);
    background-color: var(--bs-success);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-success:hover {
    color: #fff;
    border-color: var(--bs-success);
    background-color: var(--bs-success);
}
.btn-success.focus,
.btn-success:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(45, 206, 137, 0.5);
}
.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    border-color: var(--bs-success);
    background-color: var(--bs-success);
}
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show > .btn-success.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-success);
    background-color: #24a46d;
}
.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-success.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(45, 206, 137, 0.5);
}
.btn-info {
    color: #fff;
    border-color: var(--bs-info);
    background-color: var(--bs-info);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-info:hover {
    color: #fff;
    border-color: var(--bs-info);
    background-color: var(--bs-info);
}
.btn-info.focus,
.btn-info:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(17, 205, 239, 0.5);
}
.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    border-color: var(--bs-info);
    background-color: var(--bs-info);
}
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show > .btn-info.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-info);
    background-color: #0da5c0;
}
.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-info.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(17, 205, 239, 0.5);
}
.btn-warning {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-warning:hover {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
}
.btn-warning.focus,
.btn-warning:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(251, 99, 64, 0.5);
}
.btn-warning.disabled,
.btn-warning:disabled {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
}
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show > .btn-warning.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: #fa3a0e;
}
.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-warning.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(251, 99, 64, 0.5);
}
.btn-danger {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-danger:hover {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
}
.btn-danger.focus,
.btn-danger:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(245, 54, 92, 0.5);
}
.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
}
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show > .btn-danger.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: #ec0c38;
}
.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-danger.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(245, 54, 92, 0.5);
}
.btn-light {
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-light:hover {
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-light.focus,
.btn-light:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(173, 181, 189, 0.5);
}
.btn-light.disabled,
.btn-light:disabled {
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show > .btn-light.dropdown-toggle {
    color: #fff;
    border-color: #adb5bd;
    background-color: #919ca6;
}
.btn-light:not(:disabled):not(.disabled).active:focus,
.btn-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-light.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(173, 181, 189, 0.5);
}
.btn-dark {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-dark:hover {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
}
.btn-dark.focus,
.btn-dark:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(33, 37, 41, 0.5);
}
.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
}
.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show > .btn-dark.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: #0a0c0d;
}
.btn-dark:not(:disabled):not(.disabled).active:focus,
.btn-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-dark.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(33, 37, 41, 0.5);
}
.btn-default {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-default:hover {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-default.focus,
.btn-default:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(23, 43, 77, 0.5);
}
.btn-default.disabled,
.btn-default:disabled {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-default:not(:disabled):not(.disabled).active,
.btn-default:not(:disabled):not(.disabled):active,
.show > .btn-default.dropdown-toggle {
    color: #fff;
    border-color: #172b4d;
    background-color: #0b1526;
}
.btn-default:not(:disabled):not(.disabled).active:focus,
.btn-default:not(:disabled):not(.disabled):active:focus,
.show > .btn-default.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(23, 43, 77, 0.5);
}
.btn-white {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-white:hover {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-white.focus,
.btn-white:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-white.disabled,
.btn-white:disabled {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-white:not(:disabled):not(.disabled).active,
.btn-white:not(:disabled):not(.disabled):active,
.show > .btn-white.dropdown-toggle {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #e6e6e6;
}
.btn-white:not(:disabled):not(.disabled).active:focus,
.btn-white:not(:disabled):not(.disabled):active:focus,
.show > .btn-white.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-neutral {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-neutral:hover {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-neutral.focus,
.btn-neutral:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-neutral.disabled,
.btn-neutral:disabled {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-neutral:not(:disabled):not(.disabled).active,
.btn-neutral:not(:disabled):not(.disabled):active,
.show > .btn-neutral.dropdown-toggle {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #e6e6e6;
}
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.show > .btn-neutral.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-darker {
    color: #fff;
    border-color: #000;
    background-color: #000;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-darker:hover {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.btn-darker.focus,
.btn-darker:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(0, 0, 0, 0.5);
}
.btn-darker.disabled,
.btn-darker:disabled {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.btn-darker:not(:disabled):not(.disabled).active,
.btn-darker:not(:disabled):not(.disabled):active,
.show > .btn-darker.dropdown-toggle {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.btn-darker:not(:disabled):not(.disabled).active:focus,
.btn-darker:not(:disabled):not(.disabled):active:focus,
.show > .btn-darker.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(0, 0, 0, 0.5);
}
.btn-outline-primary {
    color: var(--bs-primary);
    border-color: var(--bs-primary);
    background-color: transparent;
    background-image: none;
}
.btn-outline-primary:hover {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.btn-outline-primary.focus,
.btn-outline-primary:focus {
    box-shadow: 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: var(--bs-primary);
    background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.btn-outline-secondary {
    color: var(--bs-secondary);
    border-color: var(--bs-secondary);
    background-color: transparent;
    background-image: none;
}
.btn-outline-secondary:hover {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
}
.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    box-shadow: 0 0 0 0 rgba(247, 250, 252, 0.5);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: var(--bs-secondary);
    background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show > .btn-outline-secondary.dropdown-toggle {
    color: var(--bs-dark);
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
}
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(247, 250, 252, 0.5);
}
.btn-outline-success {
    color: var(--bs-success);
    border-color: var(--bs-success);
    background-color: transparent;
    background-image: none;
}
.btn-outline-success:hover {
    color: #fff;
    border-color: var(--bs-success);
    background-color: var(--bs-success);
}
.btn-outline-success.focus,
.btn-outline-success:focus {
    box-shadow: 0 0 0 0 rgba(45, 206, 137, 0.5);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: var(--bs-success);
    background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active,
.show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-success);
    background-color: var(--bs-success);
}
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(45, 206, 137, 0.5);
}
.btn-outline-info {
    color: var(--bs-info);
    border-color: var(--bs-info);
    background-color: transparent;
    background-image: none;
}
.btn-outline-info:hover {
    color: #fff;
    border-color: var(--bs-info);
    background-color: var(--bs-info);
}
.btn-outline-info.focus,
.btn-outline-info:focus {
    box-shadow: 0 0 0 0 rgba(17, 205, 239, 0.5);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: var(--bs-info);
    background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active,
.show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-info);
    background-color: var(--bs-info);
}
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(17, 205, 239, 0.5);
}
.btn-outline-warning {
    color: var(--bs-warning);
    border-color: var(--bs-warning);
    background-color: transparent;
    background-image: none;
}
.btn-outline-warning:hover {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
}
.btn-outline-warning.focus,
.btn-outline-warning:focus {
    box-shadow: 0 0 0 0 rgba(251, 99, 64, 0.5);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: var(--bs-warning);
    background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
}
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(251, 99, 64, 0.5);
}
.btn-outline-danger {
    color: var(--bs-danger);
    border-color: var(--bs-danger);
    background-color: transparent;
    background-image: none;
}
.btn-outline-danger:hover {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
}
.btn-outline-danger.focus,
.btn-outline-danger:focus {
    box-shadow: 0 0 0 0 rgba(245, 54, 92, 0.5);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: var(--bs-danger);
    background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
}
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(245, 54, 92, 0.5);
}
.btn-outline-light {
    color: #adb5bd;
    border-color: #adb5bd;
    background-color: transparent;
    background-image: none;
}
.btn-outline-light:hover {
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-outline-light.focus,
.btn-outline-light:focus {
    box-shadow: 0 0 0 0 rgba(173, 181, 189, 0.5);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #adb5bd;
    background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled).active,
.btn-outline-light:not(:disabled):not(.disabled):active,
.show > .btn-outline-light.dropdown-toggle {
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(173, 181, 189, 0.5);
}
.btn-outline-dark {
    color: var(--bs-dark);
    border-color: var(--bs-dark);
    background-color: transparent;
    background-image: none;
}
.btn-outline-dark:hover {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
}
.btn-outline-dark.focus,
.btn-outline-dark:focus {
    box-shadow: 0 0 0 0 rgba(33, 37, 41, 0.5);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: var(--bs-dark);
    background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
}
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(33, 37, 41, 0.5);
}
.btn-outline-default {
    color: #172b4d;
    border-color: #172b4d;
    background-color: transparent;
    background-image: none;
}
.btn-outline-default:hover {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-outline-default.focus,
.btn-outline-default:focus {
    box-shadow: 0 0 0 0 rgba(23, 43, 77, 0.5);
}
.btn-outline-default.disabled,
.btn-outline-default:disabled {
    color: #172b4d;
    background-color: transparent;
}
.btn-outline-default:not(:disabled):not(.disabled).active,
.btn-outline-default:not(:disabled):not(.disabled):active,
.show > .btn-outline-default.dropdown-toggle {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-outline-default:not(:disabled):not(.disabled).active:focus,
.btn-outline-default:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-default.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(23, 43, 77, 0.5);
}
.btn-outline-white {
    color: #fff;
    border-color: #fff;
    background-color: transparent;
    background-image: none;
}
.btn-outline-white:hover {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-outline-white.focus,
.btn-outline-white:focus {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-outline-white.disabled,
.btn-outline-white:disabled {
    color: #fff;
    background-color: transparent;
}
.btn-outline-white:not(:disabled):not(.disabled).active,
.btn-outline-white:not(:disabled):not(.disabled):active,
.show > .btn-outline-white.dropdown-toggle {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-outline-white:not(:disabled):not(.disabled).active:focus,
.btn-outline-white:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-white.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-outline-neutral {
    color: #fff;
    border-color: #fff;
    background-color: transparent;
    background-image: none;
}
.btn-outline-neutral:hover {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-outline-neutral.focus,
.btn-outline-neutral:focus {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-outline-neutral.disabled,
.btn-outline-neutral:disabled {
    color: #fff;
    background-color: transparent;
}
.btn-outline-neutral:not(:disabled):not(.disabled).active,
.btn-outline-neutral:not(:disabled):not(.disabled):active,
.show > .btn-outline-neutral.dropdown-toggle {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.btn-outline-neutral:not(:disabled):not(.disabled).active:focus,
.btn-outline-neutral:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-neutral.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.btn-outline-darker {
    color: #000;
    border-color: #000;
    background-color: transparent;
    background-image: none;
}
.btn-outline-darker:hover {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.btn-outline-darker.focus,
.btn-outline-darker:focus {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.5);
}
.btn-outline-darker.disabled,
.btn-outline-darker:disabled {
    color: #000;
    background-color: transparent;
}
.btn-outline-darker:not(:disabled):not(.disabled).active,
.btn-outline-darker:not(:disabled):not(.disabled):active,
.show > .btn-outline-darker.dropdown-toggle {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.btn-outline-darker:not(:disabled):not(.disabled).active:focus,
.btn-outline-darker:not(:disabled):not(.disabled):active:focus,
.show > .btn-outline-darker.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.5);
}
.btn-link {
    font-weight: 400;
    text-decoration: none;
    color: var(--bs-primary);
}
.btn-link:hover {
    text-decoration: none;
    color: #233dd2;
}
.btn-link.focus,
.btn-link:focus {
    text-decoration: none;
    box-shadow: none;
}
.btn-link.disabled,
.btn-link:disabled {
    pointer-events: none;
    color: #8898aa;
}
.btn-group-lg > .btn,
.btn-lg {
    font-size: 0.875rem;
    line-height: 1.5;
    padding: 0.875rem 1rem;
    border-radius: 0.4375rem;
}
.btn-group-sm > .btn,
.btn-sm {
    font-size: 0.75rem;
    line-height: 1.5;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
}
.btn-block {
    display: block;
    width: 100%;
}
.btn-block + .btn-block {
    margin-top: 0.5rem;
}
input[type="button"].btn-block,
input[type="reset"].btn-block,
input[type="submit"].btn-block {
    width: 100%;
}
.fade {
    transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}
.fade:not(.show) {
    opacity: 0;
}
.collapse:not(.show) {
    display: none;
}
.collapsing {
    position: relative;
    overflow: hidden;
    height: 0;
    transition: height 0.3s ease;
}
@media (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}
.dropdown,
.dropleft,
.dropright,
.dropup {
    position: relative;
}
.dropdown-toggle {
    white-space: nowrap;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    content: "";
    vertical-align: 0.255em;
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropdown-menu {
    font-size: 1rem;
    position: absolute;
    z-index: 1000;
    top: 100%;
    left: 0;
    display: none;
    float: left;
    min-width: 10rem;
    margin: 0.125rem 0 0;
    padding: 0.5rem 0;
    list-style: none;
    text-align: left;
    color: var(--bs-body-color);
    border: 0 solid rgba(0, 0, 0, 0.15);
    border-radius: 0.4375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 50px 100px rgba(50, 50, 93, 0.1), 0 15px 35px rgba(50, 50, 93, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
}
.dropdown-menu-left {
    right: auto;
    left: 0;
}
.dropdown-menu-right {
    right: 0;
    left: auto;
}
@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}
@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }
    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}
.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    content: "";
    vertical-align: 0.255em;
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    content: "";
    vertical-align: 0.255em;
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropright .dropdown-toggle::after {
    vertical-align: 0;
}
.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    content: "";
    vertical-align: 0.255em;
}
.dropleft .dropdown-toggle::after {
    display: none;
}
.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    content: "";
    vertical-align: 0.255em;
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}
.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="top"] {
    right: auto;
    bottom: auto;
}
.dropdown-divider {
    overflow: hidden;
    height: 0;
    margin: 0.5rem 0;
    border-top: 1px solid #e9ecef;
}
.dropdown-item {
    font-weight: 400;
    display: block;
    clear: both;
    width: 100%;
    padding: 0.5rem 1rem;
    text-align: inherit;
    white-space: nowrap;
    color: #212529;
    border: 0;
    background-color: transparent;
}
.dropdown-item:focus,
.dropdown-item:hover {
    text-decoration: none;
    color: #16181b;
    background-color: #f6f9fc;
}
.dropdown-item.active,
.dropdown-item:active {
    text-decoration: none;
    color: #16181b;
    background-color: transparent;
}
.dropdown-item.disabled,
.dropdown-item:disabled {
    pointer-events: none;
    color: #8898aa;
    background-color: transparent;
}
.dropdown-menu.show {
    display: block;
}
.dropdown-header {
    font-size: 0.875rem;
    display: block;
    margin-bottom: 0;
    padding: 0.5rem 1rem;
    white-space: nowrap;
    color: #8898aa;
}
.dropdown-item-text {
    display: block;
    padding: 0.5rem 1rem;
    color: #212529;
}
.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
    position: relative;
    flex: 1 1 auto;
}
.btn-group-vertical > .btn:hover,
.btn-group > .btn:hover {
    z-index: 1;
}
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:focus,
.btn-group > .btn.active,
.btn-group > .btn:active,
.btn-group > .btn:focus {
    z-index: 1;
}
.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.btn-toolbar .input-group {
    width: auto;
}
.btn-group > .btn-group:not(:first-child),
.btn-group > .btn:not(:first-child) {
    margin-left: -1px;
}
.btn-group > .btn-group:not(:last-child) > .btn,
.btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn-group:not(:first-child) > .btn,
.btn-group > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
}
.dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after {
    margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}
.btn-group-sm > .btn + .dropdown-toggle-split,
.btn-sm + .dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}
.btn-group-lg > .btn + .dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}
.btn-group.show .dropdown-toggle {
    box-shadow: none;
}
.btn-group.show .dropdown-toggle.btn-link {
    box-shadow: none;
}
.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
    width: 100%;
}
.btn-group-vertical > .btn-group:not(:first-child),
.btn-group-vertical > .btn:not(:first-child) {
    margin-top: -1px;
}
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.btn-group-vertical > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0;
}
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.input-group {
    position: relative;
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    align-items: stretch;
}
.input-group > .custom-file,
.input-group > .custom-select,
.input-group > .form-control,
.input-group > .form-control-plaintext {
    position: relative;
    min-width: 0;
    margin-bottom: 0;
    flex: 1 1;
}
.input-group > .custom-file + .custom-file,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .form-control,
.input-group > .custom-select + .custom-file,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .form-control,
.input-group > .form-control + .custom-file,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .form-control,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .form-control {
    margin-left: -1px;
}
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
.input-group > .custom-select:focus,
.input-group > .form-control:focus {
    z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
    z-index: 4;
}
.input-group > .custom-select:not(:last-child),
.input-group > .form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-select:not(:first-child),
.input-group > .form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .custom-file {
    display: flex;
    align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group-append,
.input-group-prepend {
    display: flex;
}
.input-group-append .btn,
.input-group-prepend .btn {
    position: relative;
    z-index: 2;
}
.input-group-append .btn:focus,
.input-group-prepend .btn:focus {
    z-index: 3;
}
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .btn,
.input-group-append .input-group-text + .input-group-text,
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-prepend .input-group-text + .input-group-text {
    margin-left: -1px;
}
.input-group-prepend {
    margin-right: -1px;
}
.input-group-append {
    margin-left: -1px;
}
.input-group-text {
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    display: flex;
    margin-bottom: 0;
    padding: 0.625rem 0.75rem;
    text-align: center;
    white-space: nowrap;
    color: #adb5bd;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    align-items: center;
}
.input-group-text input[type="checkbox"],
.input-group-text input[type="radio"] {
    margin-top: 0;
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control:not(textarea) {
    height: calc(1.5em + 1.75rem + 2px);
}
.input-group-lg > .custom-select,
.input-group-lg > .form-control,
.input-group-lg > .input-group-append > .btn,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-prepend > .input-group-text {
    font-size: 0.875rem;
    line-height: 1.5;
    padding: 0.875rem 1rem;
    border-radius: 0.4375rem;
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control:not(textarea) {
    height: calc(1.5em + 0.5rem + 2px);
}
.input-group-sm > .custom-select,
.input-group-sm > .form-control,
.input-group-sm > .input-group-append > .btn,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-prepend > .input-group-text {
    font-size: 0.75rem;
    line-height: 1.5;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
}
.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
    padding-right: 1.75rem;
}
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 2.75rem;
}
.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem;
}
.custom-control-input {
    position: absolute;
    z-index: -1;
    left: 0;
    width: 1rem;
    height: 1.25rem;
    opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
.custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05), 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: var(--bs-primary);
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
.custom-control-input:disabled ~ .custom-control-label,
.custom-control-input[disabled] ~ .custom-control-label {
    color: #8898aa;
}
.custom-control-input:disabled ~ .custom-control-label::before,
.custom-control-input[disabled] ~ .custom-control-label::before {
    background-color: #e9ecef;
}
.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}
.custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -2.75rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    pointer-events: none;
    border: #dee2e6 solid 1px;
    background-color: #fff;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -2.75rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50%/50% 50%;
}
.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
    box-shadow: none;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(94, 114, 228, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
    background-color: rgba(94, 114, 228, 0.5);
}
.custom-radio .custom-control-label::before {
    border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(94, 114, 228, 0.5);
}
.custom-switch {
    padding-left: 3.5rem;
}
.custom-switch .custom-control-label::before {
    left: -3.5rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-3.5rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border-radius: 0.5rem;
    background-color: #dee2e6;
}
@media (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label::after {
        transition: none;
    }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    transform: translateX(0.75rem);
    background-color: #fff;
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(94, 114, 228, 0.5);
}
.custom-select {
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 1.75rem 0.625rem 0.75rem;
    vertical-align: middle;
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.375rem;
    background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%2332325d' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-select:focus {
    border-color: var(--bs-primary);
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 0 0 var(--bs-primary);
}
.custom-select:focus::-ms-value {
    color: #8898aa;
    background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none;
}
.custom-select:disabled {
    color: #8898aa;
    background-color: #e9ecef;
}
.custom-select::-ms-expand {
    display: none;
}
.custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #8898aa;
}
.custom-select-sm {
    font-size: 0.75rem;
    height: calc(1.5em + 0.5rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
}
.custom-select-lg {
    font-size: 0.875rem;
    height: calc(1.5em + 1.75rem + 2px);
    padding-top: 0.875rem;
    padding-bottom: 0.875rem;
    padding-left: 1rem;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    margin: 0;
    opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
    border-color: var(--bs-primary);
    box-shadow: 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.custom-file-input:disabled ~ .custom-file-label,
.custom-file-input[disabled] ~ .custom-file-label {
    background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse);
}
.custom-file-label {
    font-weight: 400;
    line-height: 1.5;
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    left: 0;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 0.75rem;
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
.custom-file-label::after {
    line-height: 1.5;
    position: absolute;
    z-index: 3;
    top: 0;
    right: 0;
    bottom: 0;
    display: block;
    height: calc(1.5em + 1.25rem);
    padding: 0.625rem 0.75rem;
    content: "Browse";
    color: #8898aa;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0;
    background-color: #fff;
}
.custom-range {
    width: 100%;
    height: 1rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.custom-range:focus {
    outline: 0;
}
.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #f8f9fe, 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #f8f9fe, 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #f8f9fe, 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.custom-range::-moz-focus-outer {
    border: 0;
}
.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border: 0;
    border-radius: 1rem;
    background-color: var(--bs-primary);
    box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
    -webkit-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none;
    }
}
.custom-range::-webkit-slider-thumb:active {
    background-color: #f7f8fe;
}
.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    cursor: pointer;
    color: transparent;
    border-color: transparent;
    border-radius: 1rem;
    background-color: #dee2e6;
    box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border: 0;
    border-radius: 1rem;
    background-color: var(--bs-primary);
    box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
    -moz-appearance: none;
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        transition: none;
    }
}
.custom-range::-moz-range-thumb:active {
    background-color: #f7f8fe;
}
.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    cursor: pointer;
    color: transparent;
    border-color: transparent;
    border-radius: 1rem;
    background-color: #dee2e6;
    box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0;
    margin-left: 0;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border: 0;
    border-radius: 1rem;
    background-color: var(--bs-primary);
    box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
    appearance: none;
}
@media (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        transition: none;
    }
}
.custom-range::-ms-thumb:active {
    background-color: #f7f8fe;
}
.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    cursor: pointer;
    color: transparent;
    border-width: 0.5rem;
    border-color: transparent;
    background-color: transparent;
    box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}
.custom-range::-ms-fill-lower {
    border-radius: 1rem;
    background-color: #dee2e6;
}
.custom-range::-ms-fill-upper {
    margin-right: 15px;
    border-radius: 1rem;
    background-color: #dee2e6;
}
.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}
.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}
.custom-range:disabled::-moz-range-track {
    cursor: default;
}
.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd;
}
.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none;
    }
}
.nav {
    display: flex;
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    flex-wrap: wrap;
}
.nav-link {
    display: block;
    padding: 0.25rem 0.75rem;
}
.nav-link:focus,
.nav-link:hover {
    text-decoration: none;
}
.nav-link.disabled {
    cursor: default;
    pointer-events: none;
    color: #8898aa;
}
.nav-tabs {
    border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-item {
    margin-bottom: -1px;
}
.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6;
}
.nav-tabs .nav-link.disabled {
    color: #8898aa;
    border-color: transparent;
    background-color: transparent;
}
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: var(--bs-body-color);
    border-color: #dee2e6 #dee2e6 #f8f9fe;
    background-color: #f8f9fe;
}
.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.nav-pills .nav-link {
    border-radius: 0.375rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: var(--bs-primary);
}
.nav-fill .nav-item {
    text-align: center;
    flex: 1 1 auto;
}
.nav-justified .nav-item {
    text-align: center;
    flex-basis: 0;
    flex-grow: 1;
}
.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}
.navbar {
    position: relative;
    display: flex;
    padding: 1rem 1rem;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.navbar .container,
.navbar .container-fluid,
.navbar .container-lg,
.navbar .container-md,
.navbar .container-sm,
.navbar .container-xl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.navbar-brand {
    font-size: 1.25rem;
    line-height: inherit;
    display: inline-block;
    margin-right: 1rem;
    padding-top: 0.0625rem;
    padding-bottom: 0.0625rem;
    white-space: nowrap;
}
.navbar-brand:focus,
.navbar-brand:hover {
    text-decoration: none;
}
.navbar-nav {
    display: flex;
    flex-direction: column;
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}
.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}
.navbar-text {
    display: inline-block;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
}
.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}
.navbar-toggler {
    font-size: 1.25rem;
    line-height: 1;
    padding: 0.25rem 0.75rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    background-color: transparent;
}
.navbar-toggler:focus,
.navbar-toggler:hover {
    text-decoration: none;
}
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    content: "";
    vertical-align: middle;
    background: no-repeat center center;
    background-size: 100% 100%;
}
@media (max-width: 575.98px) {
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid,
    .navbar-expand-sm > .container-lg,
    .navbar-expand-sm > .container-md,
    .navbar-expand-sm > .container-sm,
    .navbar-expand-sm > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid,
    .navbar-expand-sm > .container-lg,
    .navbar-expand-sm > .container-md,
    .navbar-expand-sm > .container-sm,
    .navbar-expand-sm > .container-xl {
        flex-wrap: nowrap;
    }
    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}
@media (max-width: 767.98px) {
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid,
    .navbar-expand-md > .container-lg,
    .navbar-expand-md > .container-md,
    .navbar-expand-md > .container-sm,
    .navbar-expand-md > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid,
    .navbar-expand-md > .container-lg,
    .navbar-expand-md > .container-md,
    .navbar-expand-md > .container-sm,
    .navbar-expand-md > .container-xl {
        flex-wrap: nowrap;
    }
    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}
@media (max-width: 991.98px) {
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid,
    .navbar-expand-lg > .container-lg,
    .navbar-expand-lg > .container-md,
    .navbar-expand-lg > .container-sm,
    .navbar-expand-lg > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid,
    .navbar-expand-lg > .container-lg,
    .navbar-expand-lg > .container-md,
    .navbar-expand-lg > .container-sm,
    .navbar-expand-lg > .container-xl {
        flex-wrap: nowrap;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}
@media (max-width: 1199.98px) {
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid,
    .navbar-expand-xl > .container-lg,
    .navbar-expand-xl > .container-md,
    .navbar-expand-xl > .container-sm,
    .navbar-expand-xl > .container-xl {
        padding-right: 0;
        padding-left: 0;
    }
}
@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid,
    .navbar-expand-xl > .container-lg,
    .navbar-expand-xl > .container-md,
    .navbar-expand-xl > .container-sm,
    .navbar-expand-xl > .container-xl {
        flex-wrap: nowrap;
    }
    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}
.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-lg,
.navbar-expand > .container-md,
.navbar-expand > .container-sm,
.navbar-expand > .container-xl {
    padding-right: 0;
    padding-left: 0;
}
.navbar-expand .navbar-nav {
    flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-lg,
.navbar-expand > .container-md,
.navbar-expand > .container-sm,
.navbar-expand > .container-xl {
    flex-wrap: nowrap;
}
.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}
.navbar-expand .navbar-toggler {
    display: none;
}
.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show > .nav-link {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.6);
    border-color: transparent;
}
.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.6)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:focus,
.navbar-light .navbar-text a:hover {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-dark .navbar-brand {
    color: rgba(255, 255, 255, 0.65);
}
.navbar-dark .navbar-brand:focus,
.navbar-dark .navbar-brand:hover {
    color: rgba(255, 255, 255, 0.65);
}
.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.95);
}
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255, 255, 255, 0.65);
}
.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show > .nav-link {
    color: rgba(255, 255, 255, 0.65);
}
.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.95);
    border-color: transparent;
}
.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.95)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.95);
}
.navbar-dark .navbar-text a {
    color: rgba(255, 255, 255, 0.65);
}
.navbar-dark .navbar-text a:focus,
.navbar-dark .navbar-text a:hover {
    color: rgba(255, 255, 255, 0.65);
}

.navbar.bg-white .navbar-brand {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-brand:focus,
.navbar.bg-var(--bs-body-color) {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-nav .nav-link {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-nav .nav-link:focus,
.navbar.bg-var(--bs-body-color)nk:hover {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-nav .nav-link.disabled {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-nav .active > .nav-link,
.navbar.bg-var(--bs-body-color)nk.active,
.navbar.bg-var(--bs-body-color)nk.show,
.navbar.bg-var(--bs-body-color) .nav-link {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-toggler {
    color: var(--bs-body-color);
    border-color: transparent;
}
.navbar.bg-white .navbar-toggler-icon {
    backgrovar(--bs-body-color)e/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.95)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar.bg-white .navbar-text {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-text a {
    color: var(--bs-body-color);
}
.navbar.bg-white .navbar-text a:focus,
.navbar.bg-var(--bs-body-color)r {
    color: var(--bs-body-color);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, 0.05);
    border-radius: 0.375rem;
    background-color: #fff;
    background-clip: border-box;
}
.card > hr {
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.card-body {
    min-height: 1px;
    padding: 1.5rem;
    flex: 1 1 auto;
}
.card-title {
    margin-bottom: 1.25rem;
}
.card-subtitle {
    margin-top: -0.625rem;
    margin-bottom: 0;
}
.card-text:last-child {
    margin-bottom: 0;
}
.card-link:hover {
    text-decoration: none;
}
.card-link + .card-link {
    margin-left: 1.5rem;
}
.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    background-color: #fff;
}
.card-header:first-child {
    border-radius: calc(0.375rem - 1px) calc(0.375rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child {
    border-top: 0;
}
.card-footer {
    padding: 1.25rem 1.5rem;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    background-color: #fff;
}
.card-footer:last-child {
    border-radius: 0 0 calc(0.375rem - 1px) calc(0.375rem - 1px);
}
.card-header-tabs {
    margin-right: -0.75rem;
    margin-bottom: -1.25rem;
    margin-left: -0.75rem;
    border-bottom: 0;
}
.card-header-pills {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
}
.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}
.card-img,
.card-img-bottom,
.card-img-top {
    width: 100%;
    flex-shrink: 0;
}
.card-img,
.card-img-top {
    border-top-left-radius: calc(0.375rem - 1px);
    border-top-right-radius: calc(0.375rem - 1px);
}
.card-img,
.card-img-bottom {
    border-bottom-right-radius: calc(0.375rem - 1px);
    border-bottom-left-radius: calc(0.375rem - 1px);
}
.card-deck .card {
    margin-bottom: 15px;
}
@media (min-width: 576px) {
    .card-deck {
        display: flex;
        margin-right: -15px;
        margin-left: -15px;
        flex-flow: row wrap;
    }
    .card-deck .card {
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
        flex: 1 0;
    }
}
.card-group > .card {
    margin-bottom: 15px;
}
@media (min-width: 576px) {
    .card-group {
        display: flex;
        flex-flow: row wrap;
    }
    .card-group > .card {
        margin-bottom: 0;
        flex: 1 0;
    }
    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-header,
    .card-group > .card:not(:last-child) .card-img-top {
        border-top-right-radius: 0;
    }
    .card-group > .card:not(:last-child) .card-footer,
    .card-group > .card:not(:last-child) .card-img-bottom {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-header,
    .card-group > .card:not(:first-child) .card-img-top {
        border-top-left-radius: 0;
    }
    .card-group > .card:not(:first-child) .card-footer,
    .card-group > .card:not(:first-child) .card-img-bottom {
        border-bottom-left-radius: 0;
    }
}
.card-columns .card {
    margin-bottom: 1.25rem;
}
@media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}
.accordion > .card {
    overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.accordion > .card > .card-header {
    margin-bottom: -1px;
    border-radius: 0;
}
.breadcrumb {
    display: flex;
    margin-bottom: 1rem;
    padding: 0.75rem 1rem;
    list-style: none;
    border-radius: 0.375rem;
    background-color: #e9ecef;
    flex-wrap: wrap;
}
.breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    content: "/";
    color: #8898aa;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #8898aa;
}
.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.375rem;
}
.page-link {
    line-height: 1.25;
    position: relative;
    display: block;
    margin-left: -1px;
    padding: 0.5rem 0.75rem;
    color: #8898aa;
    border: 1px solid #dee2e6;
    background-color: #fff;
}
.page-link:hover {
    z-index: 2;
    text-decoration: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #dee2e6;
}
.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: none;
}
.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.page-item:last-child .page-link {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.page-item.disabled .page-link {
    cursor: auto;
    pointer-events: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #fff;
}
.pagination-lg .page-link {
    font-size: 1.25rem;
    line-height: 1.5;
    padding: 0.75rem 1.5rem;
}
.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 0.4375rem;
    border-bottom-left-radius: 0.4375rem;
}
.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 0.4375rem;
    border-bottom-right-radius: 0.4375rem;
}
.pagination-sm .page-link {
    font-size: 0.875rem;
    line-height: 1.5;
    padding: 0.25rem 0.5rem;
}
.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}
.badge {
    font-size: 66%;
    font-weight: 600;
    line-height: 1;
    display: inline-block;
    padding: 0.35rem 0.375rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
    border-radius: 0.375rem;
}
@media (prefers-reduced-motion: reduce) {
    .badge {
        transition: none;
    }
}
a.badge:focus,
a.badge:hover {
    text-decoration: none;
}
.badge:empty {
    display: none;
}
.btn .badge {
    position: relative;
    top: -1px;
}
.badge-pill {
    padding-right: 0.875em;
    padding-left: 0.875em;
    border-radius: 10rem;
}
.badge-primary {
    color: #2643e9;
    background-color: #eaecfb;
}
.badge-primary[href]:focus,
.badge-primary[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #2a44db;
}
.badge-secondary {
    color: #cfe3f1;
    background-color: #fff;
}
.badge-secondary[href]:focus,
.badge-secondary[href]:hover {
    text-decoration: none;
    color: var(--bs-dark);
    background-color: #cadeeb;
}
.badge-success {
    color: #1aae6f;
    background-color: #b0eed3;
}
.badge-success[href]:focus,
.badge-success[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #229c68;
}
.badge-info {
    color: #03acca;
    background-color: #aaedf9;
}
.badge-info[href]:focus,
.badge-info[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #0c9cb7;
}
.badge-warning {
    color: #ff3709;
    background-color: #fee6e0;
}
.badge-warning[href]:focus,
.badge-warning[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #f93305;
}
.badge-danger {
    color: #f80031;
    background-color: #fdd1da;
}
.badge-danger[href]:focus,
.badge-danger[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #e30b36;
}
.badge-light {
    color: #879cb0;
    background-color: #fff;
}
.badge-light[href]:focus,
.badge-light[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #8b96a2;
}
.badge-dark {
    color: #090c0e;
    background-color: #6a7783;
}
.badge-dark[href]:focus,
.badge-dark[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #060607;
}
.badge-default {
    color: #091428;
    background-color: #4172c6;
}
.badge-default[href]:focus,
.badge-default[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #09111e;
}
.badge-white {
    color: #e8e3e3;
    background-color: #fff;
}
.badge-white[href]:focus,
.badge-white[href]:hover {
    text-decoration: none;
    color: var(--bs-dark);
    background-color: #e0e0e0;
}
.badge-neutral {
    color: #e8e3e3;
    background-color: #fff;
}
.badge-neutral[href]:focus,
.badge-neutral[href]:hover {
    text-decoration: none;
    color: var(--bs-dark);
    background-color: #e0e0e0;
}
.badge-darker {
    color: #000;
    background-color: #525252;
}
.badge-darker[href]:focus,
.badge-darker[href]:hover {
    text-decoration: none;
    color: #fff;
    background-color: #000;
}
.jumbotron {
    margin-bottom: 2rem;
    padding: 2rem 1rem;
    border-radius: 0.4375rem;
    background-color: #e9ecef;
}
@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}
.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}
.alert {
    position: relative;
    margin-bottom: 1rem;
    padding: 1rem 1.5rem;
    border: 1px solid transparent;
    border-radius: 0.375rem;
}
.alert-heading {
    color: inherit;
}
.alert-link {
    font-weight: 600;
}
.alert-dismissible {
    padding-right: 4.5rem;
}
.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 1rem 1.5rem;
    color: inherit;
}
.alert-primary {
    color: #fff;
    border-color: #7889e8;
    background-color: #7889e8;
}
.alert-primary a {
    font-weight: 600;
    color: #1d32aa;
}
.alert-primary a:hover {
    color: #fff;
}
.alert-primary hr {
    border-top-color: #6276e4;
}
.alert-primary .alert-link {
    color: #324cdd;
}
.alert-secondary {
    color: var(--bs-dark);
    border-color: #f8fbfc;
    background-color: #f8fbfc;
}
.alert-secondary a {
    font-weight: 600;
    color: #8dbece;
}
.alert-secondary a:hover {
    color: var(--bs-dark);
}
.alert-secondary hr {
    border-top-color: #e6f1f4;
}
.alert-secondary .alert-link {
    color: #d2e3ee;
}
.alert-success {
    color: #fff;
    border-color: #4fd69c;
    background-color: #4fd69c;
}
.alert-success a {
    font-weight: 600;
    color: #1a724c;
}
.alert-success a:hover {
    color: #fff;
}
.alert-success hr {
    border-top-color: #3ad190;
}
.alert-success .alert-link {
    color: #24a46d;
}
.alert-info {
    color: #fff;
    border-color: #37d5f2;
    background-color: #37d5f2;
}
.alert-info a {
    font-weight: 600;
    color: #097487;
}
.alert-info a:hover {
    color: #fff;
}
.alert-info hr {
    border-top-color: #1fd0f0;
}
.alert-info .alert-link {
    color: #0da5c0;
}
.alert-warning {
    color: #fff;
    border-color: #fc7c5f;
    background-color: #fc7c5f;
}
.alert-warning a {
    font-weight: 600;
    color: #be2604;
}
.alert-warning a:hover {
    color: #fff;
}
.alert-warning hr {
    border-top-color: #fc6846;
}
.alert-warning .alert-link {
    color: #fa3a0e;
}
.alert-danger {
    color: #fff;
    border-color: #f75676;
    background-color: #f75676;
}
.alert-danger a {
    font-weight: 600;
    color: #ac0829;
}
.alert-danger a:hover {
    color: #fff;
}
.alert-danger hr {
    border-top-color: #f63e62;
}
.alert-danger .alert-link {
    color: #ec0c38;
}
.alert-light {
    color: #fff;
    border-color: #bac1c8;
    background-color: #bac1c8;
}
.alert-light a {
    font-weight: 600;
    color: #677582;
}
.alert-light a:hover {
    color: #fff;
}
.alert-light hr {
    border-top-color: #acb4bd;
}
.alert-light .alert-link {
    color: #919ca6;
}
.alert-dark {
    color: #fff;
    border-color: #45484b;
    background-color: #45484b;
}
.alert-dark a {
    font-weight: 600;
    color: #000;
}
.alert-dark a:hover {
    color: #fff;
}
.alert-dark hr {
    border-top-color: #393b3e;
}
.alert-dark .alert-link {
    color: #0a0c0d;
}
.alert-default {
    color: #fff;
    border-color: #3c4d69;
    background-color: #3c4d69;
}
.alert-default a {
    font-weight: 600;
    color: #040608;
}
.alert-default a:hover {
    color: #fff;
}
.alert-default hr {
    border-top-color: #334159;
}
.alert-default .alert-link {
    color: #0b1526;
}
.alert-white {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.alert-white a {
    font-weight: 600;
    color: #b3b3b3;
}
.alert-white a:hover {
    color: var(--bs-dark);
}
.alert-white hr {
    border-top-color: #f2f2f2;
}
.alert-white .alert-link {
    color: #e6e6e6;
}
.alert-neutral {
    color: var(--bs-dark);
    border-color: #fff;
    background-color: #fff;
}
.alert-neutral a {
    font-weight: 600;
    color: #b3b3b3;
}
.alert-neutral a:hover {
    color: var(--bs-dark);
}
.alert-neutral hr {
    border-top-color: #f2f2f2;
}
.alert-neutral .alert-link {
    color: #e6e6e6;
}
.alert-darker {
    color: #fff;
    border-color: #292929;
    background-color: #292929;
}
.alert-darker a {
    font-weight: 600;
    color: #000;
}
.alert-darker a:hover {
    color: #fff;
}
.alert-darker hr {
    border-top-color: #1c1c1c;
}
.alert-darker .alert-link {
    color: #000;
}
@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }
    to {
        background-position: 0 0;
    }
}
.progress {
    font-size: 0.75rem;
    display: flex;
    overflow: hidden;
    height: 1rem;
    border-radius: 0.375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1);
}
.progress-bar {
    display: flex;
    overflow: hidden;
    flex-direction: column;
    transition: width 0.6s ease;
    text-align: center;
    white-space: nowrap;
    color: #fff;
    background-color: var(--bs-primary);
    justify-content: center;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}
.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}
.progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        animation: none;
    }
}
.media {
    display: flex;
    align-items: flex-start;
}
.media-body {
    flex: 1 1;
}
.list-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 0;
    padding-left: 0;
}
.list-group-item-action {
    width: 100%;
    text-align: inherit;
    color: var(--bs-body-color);
}
.list-group-item-action:focus,
.list-group-item-action:hover {
    z-index: 1;
    text-decoration: none;
    color: var(--bs-body-color);
    background-color: #f6f9fc;
}
.list-group-item-action:active {
    color: var(--bs-body-color);
    background-color: #e9ecef;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 1rem 1rem;
    border: 1px solid #e9ecef;
    background-color: #fff;
}
.list-group-item:first-child {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.list-group-item:last-child {
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.list-group-item.disabled,
.list-group-item:disabled {
    pointer-events: none;
    color: #8898aa;
    background-color: #fff;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.list-group-item + .list-group-item {
    border-top-width: 0;
}
.list-group-item + .list-group-item.active {
    margin-top: -1px;
    border-top-width: 1px;
}
.list-group-horizontal {
    flex-direction: row;
}
.list-group-horizontal .list-group-item:first-child {
    border-top-right-radius: 0;
    border-bottom-left-radius: 0.375rem;
}
.list-group-horizontal .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
}
.list-group-horizontal .list-group-item.active {
    margin-top: 0;
}
.list-group-horizontal .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
}
.list-group-horizontal .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
}
@media (min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction: row;
    }
    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-right-radius: 0;
        border-bottom-left-radius: 0.375rem;
    }
    .list-group-horizontal-sm .list-group-item:last-child {
        border-top-right-radius: 0.375rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-sm .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-sm .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-sm .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction: row;
    }
    .list-group-horizontal-md .list-group-item:first-child {
        border-top-right-radius: 0;
        border-bottom-left-radius: 0.375rem;
    }
    .list-group-horizontal-md .list-group-item:last-child {
        border-top-right-radius: 0.375rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-md .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-md .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-md .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction: row;
    }
    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-right-radius: 0;
        border-bottom-left-radius: 0.375rem;
    }
    .list-group-horizontal-lg .list-group-item:last-child {
        border-top-right-radius: 0.375rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-lg .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-lg .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-lg .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction: row;
    }
    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-right-radius: 0;
        border-bottom-left-radius: 0.375rem;
    }
    .list-group-horizontal-xl .list-group-item:last-child {
        border-top-right-radius: 0.375rem;
        border-bottom-left-radius: 0;
    }
    .list-group-horizontal-xl .list-group-item.active {
        margin-top: 0;
    }
    .list-group-horizontal-xl .list-group-item + .list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }
    .list-group-horizontal-xl .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }
}
.list-group-flush .list-group-item {
    border-right-width: 0;
    border-left-width: 0;
    border-radius: 0;
}
.list-group-flush .list-group-item:first-child {
    border-top-width: 0;
}
.list-group-flush:last-child .list-group-item:last-child {
    border-bottom-width: 0;
}
.list-group-item-primary {
    color: #313b77;
    background-color: #d2d8f7;
}
.list-group-item-primary.list-group-item-action:focus,
.list-group-item-primary.list-group-item-action:hover {
    color: #313b77;
    background-color: #bcc5f3;
}
.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    border-color: #313b77;
    background-color: #313b77;
}
.list-group-item-secondary {
    color: #808283;
    background-color: #fdfefe;
}
.list-group-item-secondary.list-group-item-action:focus,
.list-group-item-secondary.list-group-item-action:hover {
    color: #808283;
    background-color: #ecf6f6;
}
.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    border-color: #808283;
    background-color: #808283;
}
.list-group-item-success {
    color: #176b47;
    background-color: #c4f1de;
}
.list-group-item-success.list-group-item-action:focus,
.list-group-item-success.list-group-item-action:hover {
    color: #176b47;
    background-color: #afecd2;
}
.list-group-item-success.list-group-item-action.active {
    color: #fff;
    border-color: #176b47;
    background-color: #176b47;
}
.list-group-item-info {
    color: #096b7c;
    background-color: #bcf1fb;
}
.list-group-item-info.list-group-item-action:focus,
.list-group-item-info.list-group-item-action:hover {
    color: #096b7c;
    background-color: #a4ecfa;
}
.list-group-item-info.list-group-item-action.active {
    color: #fff;
    border-color: #096b7c;
    background-color: #096b7c;
}
.list-group-item-warning {
    color: #833321;
    background-color: #fed3ca;
}
.list-group-item-warning.list-group-item-action:focus,
.list-group-item-warning.list-group-item-action:hover {
    color: #833321;
    background-color: #febeb1;
}
.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    border-color: #833321;
    background-color: #833321;
}
.list-group-item-danger {
    color: #7f1c30;
    background-color: #fcc7d1;
}
.list-group-item-danger.list-group-item-action:focus,
.list-group-item-danger.list-group-item-action:hover {
    color: #7f1c30;
    background-color: #fbafbd;
}
.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    border-color: #7f1c30;
    background-color: #7f1c30;
}
.list-group-item-light {
    color: #5a5e62;
    background-color: #e8eaed;
}
.list-group-item-light.list-group-item-action:focus,
.list-group-item-light.list-group-item-action:hover {
    color: #5a5e62;
    background-color: #dadde2;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    border-color: #5a5e62;
    background-color: #5a5e62;
}
.list-group-item-dark {
    color: #111315;
    background-color: #c1c2c3;
}
.list-group-item-dark.list-group-item-action:focus,
.list-group-item-dark.list-group-item-action:hover {
    color: #111315;
    background-color: #b4b5b6;
}
.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    border-color: #111315;
    background-color: #111315;
}
.list-group-item-default {
    color: #0c1628;
    background-color: #bec4cd;
}
.list-group-item-default.list-group-item-action:focus,
.list-group-item-default.list-group-item-action:hover {
    color: #0c1628;
    background-color: #b0b7c2;
}
.list-group-item-default.list-group-item-action.active {
    color: #fff;
    border-color: #0c1628;
    background-color: #0c1628;
}
.list-group-item-white {
    color: #858585;
    background-color: #fff;
}
.list-group-item-white.list-group-item-action:focus,
.list-group-item-white.list-group-item-action:hover {
    color: #858585;
    background-color: #f2f2f2;
}
.list-group-item-white.list-group-item-action.active {
    color: #fff;
    border-color: #858585;
    background-color: #858585;
}
.list-group-item-neutral {
    color: #858585;
    background-color: #fff;
}
.list-group-item-neutral.list-group-item-action:focus,
.list-group-item-neutral.list-group-item-action:hover {
    color: #858585;
    background-color: #f2f2f2;
}
.list-group-item-neutral.list-group-item-action.active {
    color: #fff;
    border-color: #858585;
    background-color: #858585;
}
.list-group-item-darker {
    color: #000;
    background-color: #b8b8b8;
}
.list-group-item-darker.list-group-item-action:focus,
.list-group-item-darker.list-group-item-action:hover {
    color: #000;
    background-color: #ababab;
}
.list-group-item-darker.list-group-item-action.active {
    color: #fff;
    border-color: #000;
    background-color: #000;
}
.close {
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1;
    float: right;
    opacity: 0.5;
    color: rgba(0, 0, 0, 0.6);
    text-shadow: none;
}
@media (max-width: 1200px) {
    .close {
        font-size: calc(1.275rem + 0.3vw);
    }
}
.close:hover {
    text-decoration: none;
    color: rgba(0, 0, 0, 0.6);
}
.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover {
    opacity: 0.75;
}
button.close {
    padding: 0;
    border: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
a.close.disabled {
    pointer-events: none;
}
.modal-open {
    overflow: hidden;
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.modal {
    position: fixed;
    z-index: 1050;
    top: 0;
    left: 0;
    display: none;
    overflow: hidden;
    width: 100%;
    height: 100%;
    outline: 0;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}
.modal.show .modal-dialog {
    transform: none;
}
.modal.modal-static .modal-dialog {
    transform: scale(1.02);
}
.modal-dialog-scrollable {
    display: flex;
    max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
    overflow: hidden;
    max-height: calc(100vh - 1rem);
}
.modal-dialog-scrollable .modal-footer,
.modal-dialog-scrollable .modal-header {
    flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
    overflow-y: auto;
}
.modal-dialog-centered {
    display: flex;
    min-height: calc(100% - 1rem);
    align-items: center;
}
.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    height: 100%;
    justify-content: center;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    border: 0 solid rgba(0, 0, 0, 0.2);
    border-radius: 0.4375rem;
    outline: 0;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 15px 35px rgba(50, 50, 93, 0.2), 0 5px 15px rgba(0, 0, 0, 0.17);
}
.modal-backdrop {
    position: fixed;
    z-index: 1040;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop.show {
    opacity: 0.16;
}
.modal-header {
    display: flex;
    padding: 1.25rem;
    border-bottom: 0 solid #e9ecef;
    border-top-left-radius: 0.4375rem;
    border-top-right-radius: 0.4375rem;
    align-items: flex-start;
    justify-content: space-between;
}
.modal-header .close {
    margin: -1rem -1rem -1rem auto;
    padding: 1.25rem;
}
.modal-title {
    line-height: 1.1;
    margin-bottom: 0;
}
.modal-body {
    position: relative;
    padding: 1.5rem;
    flex: 1 1 auto;
}
.modal-footer {
    display: flex;
    padding: 1.25rem;
    border-top: 0 solid #e9ecef;
    border-bottom-right-radius: 0.4375rem;
    border-bottom-left-radius: 0.4375rem;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
}
.modal-footer > * {
    margin: 0.25rem;
}
.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    overflow: scroll;
    width: 50px;
    height: 50px;
}
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }
    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
    }
    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
    }
    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
    }
    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
    }
    .modal-content {
        box-shadow: 0 15px 35px rgba(50, 50, 93, 0.2), 0 5px 15px rgba(0, 0, 0, 0.17);
    }
    .modal-sm {
        max-width: 380px;
    }
}
@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}
@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}
.tooltip {
    font-family: Open Sans, sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;
    opacity: 0;
    text-shadow: none;
    line-break: auto;
}
.tooltip.show {
    opacity: 0.9;
}
.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}
.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-style: solid;
    border-color: transparent;
}
.bs-tooltip-auto[x-placement^="top"],
.bs-tooltip-top {
    padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow,
.bs-tooltip-top .arrow {
    bottom: 0;
}
.bs-tooltip-auto[x-placement^="top"] .arrow::before,
.bs-tooltip-top .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}
.bs-tooltip-auto[x-placement^="right"],
.bs-tooltip-right {
    padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow,
.bs-tooltip-right .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="right"] .arrow::before,
.bs-tooltip-right .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}
.bs-tooltip-auto[x-placement^="bottom"],
.bs-tooltip-bottom {
    padding: 0.4rem 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow,
.bs-tooltip-bottom .arrow {
    top: 0;
}
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before,
.bs-tooltip-bottom .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}
.bs-tooltip-auto[x-placement^="left"],
.bs-tooltip-left {
    padding: 0 0.4rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow,
.bs-tooltip-left .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}
.bs-tooltip-auto[x-placement^="left"] .arrow::before,
.bs-tooltip-left .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}
.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    text-align: center;
    color: #fff;
    border-radius: 0.375rem;
    background-color: #000;
}
.popover {
    font-family: Open Sans, sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;
    position: absolute;
    z-index: 1060;
    top: 0;
    left: 0;
    display: block;
    max-width: 276px;
    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;
    border: 1px solid rgba(0, 0, 0, 0.05);
    border-radius: 0.4375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 0.5rem 2rem 0 rgba(0, 0, 0, 0.2);
    text-shadow: none;
    line-break: auto;
}
.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.4375rem;
}
.popover .arrow::after,
.popover .arrow::before {
    position: absolute;
    display: block;
    content: "";
    border-style: solid;
    border-color: transparent;
}
.bs-popover-auto[x-placement^="top"],
.bs-popover-top {
    margin-bottom: 0.5rem;
}
.bs-popover-auto[x-placement^="top"] > .arrow,
.bs-popover-top > .arrow {
    bottom: calc(-0.5rem - 1px);
}
.bs-popover-auto[x-placement^="top"] > .arrow::before,
.bs-popover-top > .arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: transparent;
}
.bs-popover-auto[x-placement^="top"] > .arrow::after,
.bs-popover-top > .arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff;
}
.bs-popover-auto[x-placement^="right"],
.bs-popover-right {
    margin-left: 0.5rem;
}
.bs-popover-auto[x-placement^="right"] > .arrow,
.bs-popover-right > .arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.4375rem 0;
}
.bs-popover-auto[x-placement^="right"] > .arrow::before,
.bs-popover-right > .arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: transparent;
}
.bs-popover-auto[x-placement^="right"] > .arrow::after,
.bs-popover-right > .arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"],
.bs-popover-bottom {
    margin-top: 0.5rem;
}
.bs-popover-auto[x-placement^="bottom"] > .arrow,
.bs-popover-bottom > .arrow {
    top: calc(-0.5rem - 1px);
}
.bs-popover-auto[x-placement^="bottom"] > .arrow::before,
.bs-popover-bottom > .arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: transparent;
}
.bs-popover-auto[x-placement^="bottom"] > .arrow::after,
.bs-popover-bottom > .arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff;
}
.bs-popover-auto[x-placement^="bottom"] .popover-header::before,
.bs-popover-bottom .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #fff;
}
.bs-popover-auto[x-placement^="left"],
.bs-popover-left {
    margin-right: 0.5rem;
}
.bs-popover-auto[x-placement^="left"] > .arrow,
.bs-popover-left > .arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.4375rem 0;
}
.bs-popover-auto[x-placement^="left"] > .arrow::before,
.bs-popover-left > .arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: transparent;
}
.bs-popover-auto[x-placement^="left"] > .arrow::after,
.bs-popover-left > .arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff;
}
.popover-header {
    font-size: 1rem;
    margin-bottom: 0;
    padding: 0.5rem 0.95rem;
    color: #32325d;
    border-bottom: 1px solid #f2f2f2;
    border-top-left-radius: calc(0.4375rem - 1px);
    border-top-right-radius: calc(0.4375rem - 1px);
    background-color: #fff;
}
.popover-header:empty {
    display: none;
}
.popover-body {
    padding: 0.5rem 0.95rem;
    color: var(--bs-body-color);
}
.carousel {
    position: relative;
}
.carousel.pointer-event {
    touch-action: pan-y;
}
.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}
.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}
.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}
.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block;
}
.active.carousel-item-right,
.carousel-item-next:not(.carousel-item-left) {
    transform: translateX(100%);
}
.active.carousel-item-left,
.carousel-item-prev:not(.carousel-item-right) {
    transform: translateX(-100%);
}
.carousel-fade .carousel-item {
    transition-property: opacity;
    transform: none;
    opacity: 0;
}
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
    z-index: 1;
    opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    transition: opacity 0s 0.6s;
    opacity: 0;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}
.carousel-control-next,
.carousel-control-prev {
    position: absolute;
    z-index: 1;
    top: 0;
    bottom: 0;
    display: flex;
    width: 15%;
    transition: opacity 0.15s ease;
    text-align: center;
    opacity: 0.5;
    color: #fff;
    align-items: center;
    justify-content: center;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-control-next,
    .carousel-control-prev {
        transition: none;
    }
}
.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
    text-decoration: none;
    opacity: 0.9;
    color: #fff;
    outline: 0;
}
.carousel-control-prev {
    left: 0;
}
.carousel-control-next {
    right: 0;
}
.carousel-control-next-icon,
.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50%/100% 100%;
}
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}
.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}
.carousel-indicators {
    position: absolute;
    z-index: 15;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    margin-right: 15%;
    margin-left: 15%;
    padding-left: 0;
    list-style: none;
    justify-content: center;
}
.carousel-indicators li {
    box-sizing: content-box;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    cursor: pointer;
    transition: opacity 0.6s ease;
    text-indent: -999px;
    opacity: 0.5;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    background-color: #fff;
    background-clip: padding-box;
    flex: 0 1 auto;
}
@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}
.carousel-indicators .active {
    opacity: 1;
}
.carousel-caption {
    position: absolute;
    z-index: 10;
    right: 15%;
    bottom: 20px;
    left: 15%;
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;
    color: #fff;
}
.align-baseline {
    vertical-align: baseline !important;
}
.align-top {
    vertical-align: top !important;
}
.align-middle {
    vertical-align: middle !important;
}
.align-bottom {
    vertical-align: bottom !important;
}
.align-text-bottom {
    vertical-align: text-bottom !important;
}
.align-text-top {
    vertical-align: text-top !important;
}
.bg-primary {
    background-color: var(--bs-primary) !important;
}
a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
    background-color: #324cdd !important;
}
.bg-secondary {
    background-color: var(--bs-secondary) !important;
}
a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
    background-color: #d2e3ee !important;
}
.bg-success {
    background-color: var(--bs-success) !important;
}
a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
    background-color: #24a46d !important;
}
.bg-info {
    background-color: var(--bs-info) !important;
}
a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
    background-color: #0da5c0 !important;
}
.bg-warning {
    background-color: var(--bs-warning) !important;
}
a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
    background-color: #fa3a0e !important;
}
.bg-danger {
    background-color: var(--bs-danger) !important;
}
a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
    background-color: #ec0c38 !important;
}
.bg-light {
    background-color: #adb5bd !important;
}
a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
    background-color: #919ca6 !important;
}
.bg-dark {
    background-color: var(--bs-dark) !important;
}
a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
    background-color: #0a0c0d !important;
}
.bg-default {
    background-color: #172b4d !important;
}
a.bg-default:focus,
a.bg-default:hover,
button.bg-default:focus,
button.bg-default:hover {
    background-color: #0b1526 !important;
}
.bg-white {
    background-color: #fff !important;
}
a.bg-white:focus,
a.bg-white:hover,
button.bg-white:focus,
button.bg-white:hover {
    background-color: #e6e6e6 !important;
}
.bg-neutral {
    background-color: #fff !important;
}
a.bg-neutral:focus,
a.bg-neutral:hover,
button.bg-neutral:focus,
button.bg-neutral:hover {
    background-color: #e6e6e6 !important;
}
.bg-darker {
    background-color: #000 !important;
}
a.bg-darker:focus,
a.bg-darker:hover,
button.bg-darker:focus,
button.bg-darker:hover {
    background-color: #000 !important;
}
.bg-white {
    background-color: #fff !important;
}
.bg-transparent {
    background-color: transparent !important;
}
.border {
    border: 1px solid #e9ecef !important;
}
.border-top {
    border-top: 1px solid #e9ecef !important;
}
.border-right {
    border-right: 1px solid #e9ecef !important;
}
.border-bottom {
    border-bottom: 1px solid #e9ecef !important;
}
.border-left {
    border-left: 1px solid #e9ecef !important;
}
.border-0 {
    border: 0 !important;
}
.border-top-0 {
    border-top: 0 !important;
}
.border-right-0 {
    border-right: 0 !important;
}
.border-bottom-0 {
    border-bottom: 0 !important;
}
.border-left-0 {
    border-left: 0 !important;
}
.border-primary {
    border-color: var(--bs-primary) !important;
}
.border-secondary {
    border-color: var(--bs-secondary) !important;
}
.border-success {
    border-color: var(--bs-success) !important;
}
.border-info {
    border-color: var(--bs-info) !important;
}
.border-warning {
    border-color: var(--bs-warning) !important;
}
.border-danger {
    border-color: var(--bs-danger) !important;
}
.border-light {
    border-color: #adb5bd !important;
}
.border-dark {
    border-color: var(--bs-dark) !important;
}
.border-default {
    border-color: #172b4d !important;
}
.border-white {
    border-color: #fff !important;
}
.border-neutral {
    border-color: #fff !important;
}
.border-darker {
    border-color: #000 !important;
}
.border-white {
    border-color: #fff !important;
}
.rounded-sm {
    border-radius: 0.25rem !important;
}
.rounded {
    border-radius: 0.375rem !important;
}
.rounded-top {
    border-top-left-radius: 0.375rem !important;
    border-top-right-radius: 0.375rem !important;
}
.rounded-right {
    border-top-right-radius: 0.375rem !important;
    border-bottom-right-radius: 0.375rem !important;
}
.rounded-bottom {
    border-bottom-right-radius: 0.375rem !important;
    border-bottom-left-radius: 0.375rem !important;
}
.rounded-left {
    border-top-left-radius: 0.375rem !important;
    border-bottom-left-radius: 0.375rem !important;
}
.rounded-lg {
    border-radius: 0.4375rem !important;
}
.avatar.rounded-circle img,
.rounded-circle {
    border-radius: 50% !important;
}
.rounded-pill {
    border-radius: 50rem !important;
}
.rounded-0 {
    border-radius: 0 !important;
}
.clearfix::after {
    display: block;
    clear: both;
    content: "";
}
.d-none {
    display: none !important;
}
.d-inline {
    display: inline !important;
}
.d-inline-block {
    display: inline-block !important;
}
.d-block {
    display: block !important;
}
.d-table {
    display: table !important;
}
.d-table-row {
    display: table-row !important;
}
.d-table-cell {
    display: table-cell !important;
}
.d-flex {
    display: flex !important;
}
.d-inline-flex {
    display: inline-flex !important;
}
@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }
    .d-sm-inline {
        display: inline !important;
    }
    .d-sm-inline-block {
        display: inline-block !important;
    }
    .d-sm-block {
        display: block !important;
    }
    .d-sm-table {
        display: table !important;
    }
    .d-sm-table-row {
        display: table-row !important;
    }
    .d-sm-table-cell {
        display: table-cell !important;
    }
    .d-sm-flex {
        display: flex !important;
    }
    .d-sm-inline-flex {
        display: inline-flex !important;
    }
}
@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }
    .d-md-inline {
        display: inline !important;
    }
    .d-md-inline-block {
        display: inline-block !important;
    }
    .d-md-block {
        display: block !important;
    }
    .d-md-table {
        display: table !important;
    }
    .d-md-table-row {
        display: table-row !important;
    }
    .d-md-table-cell {
        display: table-cell !important;
    }
    .d-md-flex {
        display: flex !important;
    }
    .d-md-inline-flex {
        display: inline-flex !important;
    }
}
@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }
    .d-lg-inline {
        display: inline !important;
    }
    .d-lg-inline-block {
        display: inline-block !important;
    }
    .d-lg-block {
        display: block !important;
    }
    .d-lg-table {
        display: table !important;
    }
    .d-lg-table-row {
        display: table-row !important;
    }
    .d-lg-table-cell {
        display: table-cell !important;
    }
    .d-lg-flex {
        display: flex !important;
    }
    .d-lg-inline-flex {
        display: inline-flex !important;
    }
}
@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important;
    }
    .d-xl-inline {
        display: inline !important;
    }
    .d-xl-inline-block {
        display: inline-block !important;
    }
    .d-xl-block {
        display: block !important;
    }
    .d-xl-table {
        display: table !important;
    }
    .d-xl-table-row {
        display: table-row !important;
    }
    .d-xl-table-cell {
        display: table-cell !important;
    }
    .d-xl-flex {
        display: flex !important;
    }
    .d-xl-inline-flex {
        display: inline-flex !important;
    }
}
@media print {
    .d-print-none {
        display: none !important;
    }
    .d-print-inline {
        display: inline !important;
    }
    .d-print-inline-block {
        display: inline-block !important;
    }
    .d-print-block {
        display: block !important;
    }
    .d-print-table {
        display: table !important;
    }
    .d-print-table-row {
        display: table-row !important;
    }
    .d-print-table-cell {
        display: table-cell !important;
    }
    .d-print-flex {
        display: flex !important;
    }
    .d-print-inline-flex {
        display: inline-flex !important;
    }
}
.embed-responsive {
    position: relative;
    display: block;
    overflow: hidden;
    width: 100%;
    padding: 0;
}
.embed-responsive::before {
    display: block;
    content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}
.embed-responsive-16by9::before {
    padding-top: 56.25%;
}
.embed-responsive-4by3::before {
    padding-top: 75%;
}
.embed-responsive-1by1::before {
    padding-top: 100%;
}
.embed-responsive-21by9::before {
    padding-top: 42.85714%;
}
.embed-responsive-16by9::before {
    padding-top: 56.25%;
}
.embed-responsive-4by3::before {
    padding-top: 75%;
}
.embed-responsive-1by1::before {
    padding-top: 100%;
}
.flex-row {
    flex-direction: row !important;
}
.flex-column {
    flex-direction: column !important;
}
.flex-row-reverse {
    flex-direction: row-reverse !important;
}
.flex-column-reverse {
    flex-direction: column-reverse !important;
}
.flex-wrap {
    flex-wrap: wrap !important;
}
.flex-nowrap {
    flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important;
}
.flex-fill {
    flex: 1 1 auto !important;
}
.flex-grow-0 {
    flex-grow: 0 !important;
}
.flex-grow-1 {
    flex-grow: 1 !important;
}
.flex-shrink-0 {
    flex-shrink: 0 !important;
}
.flex-shrink-1 {
    flex-shrink: 1 !important;
}
.justify-content-start {
    justify-content: flex-start !important;
}
.justify-content-end {
    justify-content: flex-end !important;
}
.justify-content-center {
    justify-content: center !important;
}
.justify-content-between {
    justify-content: space-between !important;
}
.justify-content-around {
    justify-content: space-around !important;
}
.align-items-start {
    align-items: flex-start !important;
}
.align-items-end {
    align-items: flex-end !important;
}
.align-items-center {
    align-items: center !important;
}
.align-items-baseline {
    align-items: baseline !important;
}
.align-items-stretch {
    align-items: stretch !important;
}
.align-content-start {
    align-content: flex-start !important;
}
.align-content-end {
    align-content: flex-end !important;
}
.align-content-center {
    align-content: center !important;
}
.align-content-between {
    align-content: space-between !important;
}
.align-content-around {
    align-content: space-around !important;
}
.align-content-stretch {
    align-content: stretch !important;
}
.align-self-auto {
    align-self: auto !important;
}
.align-self-start {
    align-self: flex-start !important;
}
.align-self-end {
    align-self: flex-end !important;
}
.align-self-center {
    align-self: center !important;
}
.align-self-baseline {
    align-self: baseline !important;
}
.align-self-stretch {
    align-self: stretch !important;
}
@media (min-width: 576px) {
    .flex-sm-row {
        flex-direction: row !important;
    }
    .flex-sm-column {
        flex-direction: column !important;
    }
    .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-sm-wrap {
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-sm-fill {
        flex: 1 1 auto !important;
    }
    .flex-sm-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-sm-start {
        justify-content: flex-start !important;
    }
    .justify-content-sm-end {
        justify-content: flex-end !important;
    }
    .justify-content-sm-center {
        justify-content: center !important;
    }
    .justify-content-sm-between {
        justify-content: space-between !important;
    }
    .justify-content-sm-around {
        justify-content: space-around !important;
    }
    .align-items-sm-start {
        align-items: flex-start !important;
    }
    .align-items-sm-end {
        align-items: flex-end !important;
    }
    .align-items-sm-center {
        align-items: center !important;
    }
    .align-items-sm-baseline {
        align-items: baseline !important;
    }
    .align-items-sm-stretch {
        align-items: stretch !important;
    }
    .align-content-sm-start {
        align-content: flex-start !important;
    }
    .align-content-sm-end {
        align-content: flex-end !important;
    }
    .align-content-sm-center {
        align-content: center !important;
    }
    .align-content-sm-between {
        align-content: space-between !important;
    }
    .align-content-sm-around {
        align-content: space-around !important;
    }
    .align-content-sm-stretch {
        align-content: stretch !important;
    }
    .align-self-sm-auto {
        align-self: auto !important;
    }
    .align-self-sm-start {
        align-self: flex-start !important;
    }
    .align-self-sm-end {
        align-self: flex-end !important;
    }
    .align-self-sm-center {
        align-self: center !important;
    }
    .align-self-sm-baseline {
        align-self: baseline !important;
    }
    .align-self-sm-stretch {
        align-self: stretch !important;
    }
}
@media (min-width: 768px) {
    .flex-md-row {
        flex-direction: row !important;
    }
    .flex-md-column {
        flex-direction: column !important;
    }
    .flex-md-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-md-wrap {
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-md-fill {
        flex: 1 1 auto !important;
    }
    .flex-md-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-md-start {
        justify-content: flex-start !important;
    }
    .justify-content-md-end {
        justify-content: flex-end !important;
    }
    .justify-content-md-center {
        justify-content: center !important;
    }
    .justify-content-md-between {
        justify-content: space-between !important;
    }
    .justify-content-md-around {
        justify-content: space-around !important;
    }
    .align-items-md-start {
        align-items: flex-start !important;
    }
    .align-items-md-end {
        align-items: flex-end !important;
    }
    .align-items-md-center {
        align-items: center !important;
    }
    .align-items-md-baseline {
        align-items: baseline !important;
    }
    .align-items-md-stretch {
        align-items: stretch !important;
    }
    .align-content-md-start {
        align-content: flex-start !important;
    }
    .align-content-md-end {
        align-content: flex-end !important;
    }
    .align-content-md-center {
        align-content: center !important;
    }
    .align-content-md-between {
        align-content: space-between !important;
    }
    .align-content-md-around {
        align-content: space-around !important;
    }
    .align-content-md-stretch {
        align-content: stretch !important;
    }
    .align-self-md-auto {
        align-self: auto !important;
    }
    .align-self-md-start {
        align-self: flex-start !important;
    }
    .align-self-md-end {
        align-self: flex-end !important;
    }
    .align-self-md-center {
        align-self: center !important;
    }
    .align-self-md-baseline {
        align-self: baseline !important;
    }
    .align-self-md-stretch {
        align-self: stretch !important;
    }
}
@media (min-width: 992px) {
    .flex-lg-row {
        flex-direction: row !important;
    }
    .flex-lg-column {
        flex-direction: column !important;
    }
    .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-lg-wrap {
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-lg-fill {
        flex: 1 1 auto !important;
    }
    .flex-lg-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-lg-start {
        justify-content: flex-start !important;
    }
    .justify-content-lg-end {
        justify-content: flex-end !important;
    }
    .justify-content-lg-center {
        justify-content: center !important;
    }
    .justify-content-lg-between {
        justify-content: space-between !important;
    }
    .justify-content-lg-around {
        justify-content: space-around !important;
    }
    .align-items-lg-start {
        align-items: flex-start !important;
    }
    .align-items-lg-end {
        align-items: flex-end !important;
    }
    .align-items-lg-center {
        align-items: center !important;
    }
    .align-items-lg-baseline {
        align-items: baseline !important;
    }
    .align-items-lg-stretch {
        align-items: stretch !important;
    }
    .align-content-lg-start {
        align-content: flex-start !important;
    }
    .align-content-lg-end {
        align-content: flex-end !important;
    }
    .align-content-lg-center {
        align-content: center !important;
    }
    .align-content-lg-between {
        align-content: space-between !important;
    }
    .align-content-lg-around {
        align-content: space-around !important;
    }
    .align-content-lg-stretch {
        align-content: stretch !important;
    }
    .align-self-lg-auto {
        align-self: auto !important;
    }
    .align-self-lg-start {
        align-self: flex-start !important;
    }
    .align-self-lg-end {
        align-self: flex-end !important;
    }
    .align-self-lg-center {
        align-self: center !important;
    }
    .align-self-lg-baseline {
        align-self: baseline !important;
    }
    .align-self-lg-stretch {
        align-self: stretch !important;
    }
}
@media (min-width: 1200px) {
    .flex-xl-row {
        flex-direction: row !important;
    }
    .flex-xl-column {
        flex-direction: column !important;
    }
    .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
    }
    .flex-xl-wrap {
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }
    .flex-xl-fill {
        flex: 1 1 auto !important;
    }
    .flex-xl-grow-0 {
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
    }
    .justify-content-xl-start {
        justify-content: flex-start !important;
    }
    .justify-content-xl-end {
        justify-content: flex-end !important;
    }
    .justify-content-xl-center {
        justify-content: center !important;
    }
    .justify-content-xl-between {
        justify-content: space-between !important;
    }
    .justify-content-xl-around {
        justify-content: space-around !important;
    }
    .align-items-xl-start {
        align-items: flex-start !important;
    }
    .align-items-xl-end {
        align-items: flex-end !important;
    }
    .align-items-xl-center {
        align-items: center !important;
    }
    .align-items-xl-baseline {
        align-items: baseline !important;
    }
    .align-items-xl-stretch {
        align-items: stretch !important;
    }
    .align-content-xl-start {
        align-content: flex-start !important;
    }
    .align-content-xl-end {
        align-content: flex-end !important;
    }
    .align-content-xl-center {
        align-content: center !important;
    }
    .align-content-xl-between {
        align-content: space-between !important;
    }
    .align-content-xl-around {
        align-content: space-around !important;
    }
    .align-content-xl-stretch {
        align-content: stretch !important;
    }
    .align-self-xl-auto {
        align-self: auto !important;
    }
    .align-self-xl-start {
        align-self: flex-start !important;
    }
    .align-self-xl-end {
        align-self: flex-end !important;
    }
    .align-self-xl-center {
        align-self: center !important;
    }
    .align-self-xl-baseline {
        align-self: baseline !important;
    }
    .align-self-xl-stretch {
        align-self: stretch !important;
    }
}
.float-left {
    float: left !important;
}
.float-right {
    float: right !important;
}
.float-none {
    float: none !important;
}
@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }
    .float-sm-right {
        float: right !important;
    }
    .float-sm-none {
        float: none !important;
    }
}
@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }
    .float-md-right {
        float: right !important;
    }
    .float-md-none {
        float: none !important;
    }
}
@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }
    .float-lg-right {
        float: right !important;
    }
    .float-lg-none {
        float: none !important;
    }
}
@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important;
    }
    .float-xl-right {
        float: right !important;
    }
    .float-xl-none {
        float: none !important;
    }
}
.overflow-auto {
    overflow: auto !important;
}
.overflow-hidden {
    overflow: hidden !important;
}
.position-static {
    position: static !important;
}
.position-relative {
    position: relative !important;
}
.position-absolute {
    position: absolute !important;
}
.position-fixed {
    position: fixed !important;
}
.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}
.fixed-top {
    position: fixed;
    z-index: 1030;
    top: 0;
    right: 0;
    left: 0;
}
.fixed-bottom {
    position: fixed;
    z-index: 1030;
    right: 0;
    bottom: 0;
    left: 0;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        z-index: 1020;
        top: 0;
    }
}
.sr-only {
    position: absolute;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    white-space: nowrap;
    border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    overflow: visible;
    clip: auto;
    width: auto;
    height: auto;
    white-space: normal;
}
.shadow-sm {
    box-shadow: 0 0 0.5rem rgba(136, 152, 170, 0.075) !important;
}
.shadow {
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
}
.shadow-lg {
    box-shadow: 0 0 3rem rgba(136, 152, 170, 0.175) !important;
}
.shadow-none {
    box-shadow: none !important;
}
.w-25 {
    width: 25% !important;
}
.w-50 {
    width: 50% !important;
}
.w-75 {
    width: 75% !important;
}
.w-100 {
    width: 100% !important;
}
.w-auto {
    width: auto !important;
}
.h-25 {
    height: 25% !important;
}
.h-50 {
    height: 50% !important;
}
.h-75 {
    height: 75% !important;
}
.h-100 {
    height: 100% !important;
}
.h-auto {
    height: auto !important;
}
.mw-100 {
    max-width: 100% !important;
}
.mh-100 {
    max-height: 100% !important;
}
.min-vw-100 {
    min-width: 100vw !important;
}
.min-vh-100 {
    min-height: 100vh !important;
}
.vw-100 {
    width: 100vw !important;
}
.vh-100 {
    height: 100vh !important;
}
.stretched-link::after {
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: "";
    pointer-events: auto;
    background-color: rgba(0, 0, 0, 0);
}
.m-0 {
    margin: 0 !important;
}
.mt-0,
.my-0 {
    margin-top: 0 !important;
}
.mr-0,
.mx-0 {
    margin-right: 0 !important;
}
.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}
.ml-0,
.mx-0 {
    margin-left: 0 !important;
}
.m-1 {
    margin: 0.25rem !important;
}
.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}
.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}
.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}
.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}
.m-2 {
    margin: 0.5rem !important;
}
.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}
.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}
.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}
.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}
.m-3 {
    margin: 1rem !important;
}
.mt-3,
.my-3 {
    margin-top: 1rem !important;
}
.mr-3,
.mx-3 {
    margin-right: 1rem !important;
}
.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}
.ml-3,
.mx-3 {
    margin-left: 1rem !important;
}
.m-4 {
    margin: 1.5rem !important;
}
.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}
.mr-4,
.mx-4 {
    margin-right: 1.5rem !important;
}
.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}
.ml-4,
.mx-4 {
    margin-left: 1.5rem !important;
}
.m-5 {
    margin: 3rem !important;
}
.mt-5,
.my-5 {
    margin-top: 3rem !important;
}
.mr-5,
.mx-5 {
    margin-right: 3rem !important;
}
.mb-5,
.my-5 {
    margin-bottom: 3rem !important;
}
.ml-5,
.mx-5 {
    margin-left: 3rem !important;
}
.m--9 {
    margin: -10rem !important;
}
.mt--9,
.my--9 {
    margin-top: -10rem !important;
}
.mr--9,
.mx--9 {
    margin-right: -10rem !important;
}
.mb--9,
.my--9 {
    margin-bottom: -10rem !important;
}
.ml--9,
.mx--9 {
    margin-left: -10rem !important;
}
.m--8 {
    margin: -8rem !important;
}
.mt--8,
.my--8 {
    margin-top: -8rem !important;
}
.mr--8,
.mx--8 {
    margin-right: -8rem !important;
}
.mb--8,
.my--8 {
    margin-bottom: -8rem !important;
}
.ml--8,
.mx--8 {
    margin-left: -8rem !important;
}
.m--7 {
    margin: -6rem !important;
}
.mt--7,
.my--7 {
    margin-top: -6rem !important;
}
.mr--7,
.mx--7 {
    margin-right: -6rem !important;
}
.mb--7,
.my--7 {
    margin-bottom: -6rem !important;
}
.ml--7,
.mx--7 {
    margin-left: -6rem !important;
}
.m--6 {
    margin: -4.5rem !important;
}
.mt--6,
.my--6 {
    margin-top: -4.5rem !important;
}
.mr--6,
.mx--6 {
    margin-right: -4.5rem !important;
}
.mb--6,
.my--6 {
    margin-bottom: -4.5rem !important;
}
.ml--6,
.mx--6 {
    margin-left: -4.5rem !important;
}
.m--5 {
    margin: -3rem !important;
}
.mt--5,
.my--5 {
    margin-top: -3rem !important;
}
.mr--5,
.mx--5 {
    margin-right: -3rem !important;
}
.mb--5,
.my--5 {
    margin-bottom: -3rem !important;
}
.ml--5,
.mx--5 {
    margin-left: -3rem !important;
}
.m--4 {
    margin: -1.5rem !important;
}
.mt--4,
.my--4 {
    margin-top: -1.5rem !important;
}
.mr--4,
.mx--4 {
    margin-right: -1.5rem !important;
}
.mb--4,
.my--4 {
    margin-bottom: -1.5rem !important;
}
.ml--4,
.mx--4 {
    margin-left: -1.5rem !important;
}
.m--3 {
    margin: -1rem !important;
}
.mt--3,
.my--3 {
    margin-top: -1rem !important;
}
.mr--3,
.mx--3 {
    margin-right: -1rem !important;
}
.mb--3,
.my--3 {
    margin-bottom: -1rem !important;
}
.ml--3,
.mx--3 {
    margin-left: -1rem !important;
}
.m--2 {
    margin: -0.5rem !important;
}
.mt--2,
.my--2 {
    margin-top: -0.5rem !important;
}
.mr--2,
.mx--2 {
    margin-right: -0.5rem !important;
}
.mb--2,
.my--2 {
    margin-bottom: -0.5rem !important;
}
.ml--2,
.mx--2 {
    margin-left: -0.5rem !important;
}
.m--1 {
    margin: -0.25rem !important;
}
.mt--1,
.my--1 {
    margin-top: -0.25rem !important;
}
.mr--1,
.mx--1 {
    margin-right: -0.25rem !important;
}
.mb--1,
.my--1 {
    margin-bottom: -0.25rem !important;
}
.ml--1,
.mx--1 {
    margin-left: -0.25rem !important;
}
.m-6 {
    margin: 4.5rem !important;
}
.mt-6,
.my-6 {
    margin-top: 4.5rem !important;
}
.mr-6,
.mx-6 {
    margin-right: 4.5rem !important;
}
.mb-6,
.my-6 {
    margin-bottom: 4.5rem !important;
}
.ml-6,
.mx-6 {
    margin-left: 4.5rem !important;
}
.m-7 {
    margin: 6rem !important;
}
.mt-7,
.my-7 {
    margin-top: 6rem !important;
}
.mr-7,
.mx-7 {
    margin-right: 6rem !important;
}
.mb-7,
.my-7 {
    margin-bottom: 6rem !important;
}
.ml-7,
.mx-7 {
    margin-left: 6rem !important;
}
.m-8 {
    margin: 8rem !important;
}
.mt-8,
.my-8 {
    margin-top: 8rem !important;
}
.mr-8,
.mx-8 {
    margin-right: 8rem !important;
}
.mb-8,
.my-8 {
    margin-bottom: 8rem !important;
}
.ml-8,
.mx-8 {
    margin-left: 8rem !important;
}
.m-9 {
    margin: 10rem !important;
}
.mt-9,
.my-9 {
    margin-top: 10rem !important;
}
.mr-9,
.mx-9 {
    margin-right: 10rem !important;
}
.mb-9,
.my-9 {
    margin-bottom: 10rem !important;
}
.ml-9,
.mx-9 {
    margin-left: 10rem !important;
}
.p-0 {
    padding: 0 !important;
}
.pt-0,
.py-0 {
    padding-top: 0 !important;
}
.pr-0,
.px-0 {
    padding-right: 0 !important;
}
.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}
.pl-0,
.px-0 {
    padding-left: 0 !important;
}
.p-1 {
    padding: 0.25rem !important;
}
.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}
.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}
.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}
.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}
.p-2 {
    padding: 0.5rem !important;
}
.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}
.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}
.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}
.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}
.p-3 {
    padding: 1rem !important;
}
.pt-3,
.py-3 {
    padding-top: 1rem !important;
}
.pr-3,
.px-3 {
    padding-right: 1rem !important;
}
.pb-3,
.py-3 {
    padding-bottom: 1rem !important;
}
.pl-3,
.px-3 {
    padding-left: 1rem !important;
}
.p-4 {
    padding: 1.5rem !important;
}
.pt-4,
.py-4 {
    padding-top: 1.5rem !important;
}
.pr-4,
.px-4 {
    padding-right: 1.5rem !important;
}
.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important;
}
.pl-4,
.px-4 {
    padding-left: 1.5rem !important;
}
.p-5 {
    padding: 3rem !important;
}
.pt-5,
.py-5 {
    padding-top: 3rem !important;
}
.pr-5,
.px-5 {
    padding-right: 3rem !important;
}
.pb-5,
.py-5 {
    padding-bottom: 3rem !important;
}
.pl-5,
.px-5 {
    padding-left: 3rem !important;
}
.p-6 {
    padding: 4.5rem !important;
}
.pt-6,
.py-6 {
    padding-top: 4.5rem !important;
}
.pr-6,
.px-6 {
    padding-right: 4.5rem !important;
}
.pb-6,
.py-6 {
    padding-bottom: 4.5rem !important;
}
.pl-6,
.px-6 {
    padding-left: 4.5rem !important;
}
.p-7 {
    padding: 6rem !important;
}
.pt-7,
.py-7 {
    padding-top: 6rem !important;
}
.pr-7,
.px-7 {
    padding-right: 6rem !important;
}
.pb-7,
.py-7 {
    padding-bottom: 6rem !important;
}
.pl-7,
.px-7 {
    padding-left: 6rem !important;
}
.p-8 {
    padding: 8rem !important;
}
.pt-8,
.py-8 {
    padding-top: 8rem !important;
}
.pr-8,
.px-8 {
    padding-right: 8rem !important;
}
.pb-8,
.py-8 {
    padding-bottom: 8rem !important;
}
.pl-8,
.px-8 {
    padding-left: 8rem !important;
}
.p-9 {
    padding: 10rem !important;
}
.pt-9,
.py-9 {
    padding-top: 10rem !important;
}
.pr-9,
.px-9 {
    padding-right: 10rem !important;
}
.pb-9,
.py-9 {
    padding-bottom: 10rem !important;
}
.pl-9,
.px-9 {
    padding-left: 10rem !important;
}
.m-n1 {
    margin: -0.25rem !important;
}
.mt-n1,
.my-n1 {
    margin-top: -0.25rem !important;
}
.mr-n1,
.mx-n1 {
    margin-right: -0.25rem !important;
}
.mb-n1,
.my-n1 {
    margin-bottom: -0.25rem !important;
}
.ml-n1,
.mx-n1 {
    margin-left: -0.25rem !important;
}
.m-n2 {
    margin: -0.5rem !important;
}
.mt-n2,
.my-n2 {
    margin-top: -0.5rem !important;
}
.mr-n2,
.mx-n2 {
    margin-right: -0.5rem !important;
}
.mb-n2,
.my-n2 {
    margin-bottom: -0.5rem !important;
}
.ml-n2,
.mx-n2 {
    margin-left: -0.5rem !important;
}
.m-n3 {
    margin: -1rem !important;
}
.mt-n3,
.my-n3 {
    margin-top: -1rem !important;
}
.mr-n3,
.mx-n3 {
    margin-right: -1rem !important;
}
.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important;
}
.ml-n3,
.mx-n3 {
    margin-left: -1rem !important;
}
.m-n4 {
    margin: -1.5rem !important;
}
.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important;
}
.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important;
}
.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important;
}
.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important;
}
.m-n5 {
    margin: -3rem !important;
}
.mt-n5,
.my-n5 {
    margin-top: -3rem !important;
}
.mr-n5,
.mx-n5 {
    margin-right: -3rem !important;
}
.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important;
}
.ml-n5,
.mx-n5 {
    margin-left: -3rem !important;
}
.m-n-9 {
    margin: 10rem !important;
}
.mt-n-9,
.my-n-9 {
    margin-top: 10rem !important;
}
.mr-n-9,
.mx-n-9 {
    margin-right: 10rem !important;
}
.mb-n-9,
.my-n-9 {
    margin-bottom: 10rem !important;
}
.ml-n-9,
.mx-n-9 {
    margin-left: 10rem !important;
}
.m-n-8 {
    margin: 8rem !important;
}
.mt-n-8,
.my-n-8 {
    margin-top: 8rem !important;
}
.mr-n-8,
.mx-n-8 {
    margin-right: 8rem !important;
}
.mb-n-8,
.my-n-8 {
    margin-bottom: 8rem !important;
}
.ml-n-8,
.mx-n-8 {
    margin-left: 8rem !important;
}
.m-n-7 {
    margin: 6rem !important;
}
.mt-n-7,
.my-n-7 {
    margin-top: 6rem !important;
}
.mr-n-7,
.mx-n-7 {
    margin-right: 6rem !important;
}
.mb-n-7,
.my-n-7 {
    margin-bottom: 6rem !important;
}
.ml-n-7,
.mx-n-7 {
    margin-left: 6rem !important;
}
.m-n-6 {
    margin: 4.5rem !important;
}
.mt-n-6,
.my-n-6 {
    margin-top: 4.5rem !important;
}
.mr-n-6,
.mx-n-6 {
    margin-right: 4.5rem !important;
}
.mb-n-6,
.my-n-6 {
    margin-bottom: 4.5rem !important;
}
.ml-n-6,
.mx-n-6 {
    margin-left: 4.5rem !important;
}
.m-n-5 {
    margin: 3rem !important;
}
.mt-n-5,
.my-n-5 {
    margin-top: 3rem !important;
}
.mr-n-5,
.mx-n-5 {
    margin-right: 3rem !important;
}
.mb-n-5,
.my-n-5 {
    margin-bottom: 3rem !important;
}
.ml-n-5,
.mx-n-5 {
    margin-left: 3rem !important;
}
.m-n-4 {
    margin: 1.5rem !important;
}
.mt-n-4,
.my-n-4 {
    margin-top: 1.5rem !important;
}
.mr-n-4,
.mx-n-4 {
    margin-right: 1.5rem !important;
}
.mb-n-4,
.my-n-4 {
    margin-bottom: 1.5rem !important;
}
.ml-n-4,
.mx-n-4 {
    margin-left: 1.5rem !important;
}
.m-n-3 {
    margin: 1rem !important;
}
.mt-n-3,
.my-n-3 {
    margin-top: 1rem !important;
}
.mr-n-3,
.mx-n-3 {
    margin-right: 1rem !important;
}
.mb-n-3,
.my-n-3 {
    margin-bottom: 1rem !important;
}
.ml-n-3,
.mx-n-3 {
    margin-left: 1rem !important;
}
.m-n-2 {
    margin: 0.5rem !important;
}
.mt-n-2,
.my-n-2 {
    margin-top: 0.5rem !important;
}
.mr-n-2,
.mx-n-2 {
    margin-right: 0.5rem !important;
}
.mb-n-2,
.my-n-2 {
    margin-bottom: 0.5rem !important;
}
.ml-n-2,
.mx-n-2 {
    margin-left: 0.5rem !important;
}
.m-n-1 {
    margin: 0.25rem !important;
}
.mt-n-1,
.my-n-1 {
    margin-top: 0.25rem !important;
}
.mr-n-1,
.mx-n-1 {
    margin-right: 0.25rem !important;
}
.mb-n-1,
.my-n-1 {
    margin-bottom: 0.25rem !important;
}
.ml-n-1,
.mx-n-1 {
    margin-left: 0.25rem !important;
}
.m-n6 {
    margin: -4.5rem !important;
}
.mt-n6,
.my-n6 {
    margin-top: -4.5rem !important;
}
.mr-n6,
.mx-n6 {
    margin-right: -4.5rem !important;
}
.mb-n6,
.my-n6 {
    margin-bottom: -4.5rem !important;
}
.ml-n6,
.mx-n6 {
    margin-left: -4.5rem !important;
}
.m-n7 {
    margin: -6rem !important;
}
.mt-n7,
.my-n7 {
    margin-top: -6rem !important;
}
.mr-n7,
.mx-n7 {
    margin-right: -6rem !important;
}
.mb-n7,
.my-n7 {
    margin-bottom: -6rem !important;
}
.ml-n7,
.mx-n7 {
    margin-left: -6rem !important;
}
.m-n8 {
    margin: -8rem !important;
}
.mt-n8,
.my-n8 {
    margin-top: -8rem !important;
}
.mr-n8,
.mx-n8 {
    margin-right: -8rem !important;
}
.mb-n8,
.my-n8 {
    margin-bottom: -8rem !important;
}
.ml-n8,
.mx-n8 {
    margin-left: -8rem !important;
}
.m-n9 {
    margin: -10rem !important;
}
.mt-n9,
.my-n9 {
    margin-top: -10rem !important;
}
.mr-n9,
.mx-n9 {
    margin-right: -10rem !important;
}
.mb-n9,
.my-n9 {
    margin-bottom: -10rem !important;
}
.ml-n9,
.mx-n9 {
    margin-left: -10rem !important;
}
.m-auto {
    margin: auto !important;
}
.mt-auto,
.my-auto {
    margin-top: auto !important;
}
.mr-auto,
.mx-auto {
    margin-right: auto !important;
}
.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}
.ml-auto,
.mx-auto {
    margin-left: auto !important;
}
@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }
    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important;
    }
    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important;
    }
    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important;
    }
    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important;
    }
    .m-sm-1 {
        margin: 0.25rem !important;
    }
    .mt-sm-1,
    .my-sm-1 {
        margin-top: 0.25rem !important;
    }
    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 0.25rem !important;
    }
    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 0.25rem !important;
    }
    .m-sm-2 {
        margin: 0.5rem !important;
    }
    .mt-sm-2,
    .my-sm-2 {
        margin-top: 0.5rem !important;
    }
    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 0.5rem !important;
    }
    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 0.5rem !important;
    }
    .m-sm-3 {
        margin: 1rem !important;
    }
    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem !important;
    }
    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem !important;
    }
    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem !important;
    }
    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem !important;
    }
    .m-sm-4 {
        margin: 1.5rem !important;
    }
    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem !important;
    }
    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem !important;
    }
    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem !important;
    }
    .m-sm-5 {
        margin: 3rem !important;
    }
    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem !important;
    }
    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem !important;
    }
    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem !important;
    }
    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem !important;
    }
    .m-sm--9 {
        margin: -10rem !important;
    }
    .mt-sm--9,
    .my-sm--9 {
        margin-top: -10rem !important;
    }
    .mr-sm--9,
    .mx-sm--9 {
        margin-right: -10rem !important;
    }
    .mb-sm--9,
    .my-sm--9 {
        margin-bottom: -10rem !important;
    }
    .ml-sm--9,
    .mx-sm--9 {
        margin-left: -10rem !important;
    }
    .m-sm--8 {
        margin: -8rem !important;
    }
    .mt-sm--8,
    .my-sm--8 {
        margin-top: -8rem !important;
    }
    .mr-sm--8,
    .mx-sm--8 {
        margin-right: -8rem !important;
    }
    .mb-sm--8,
    .my-sm--8 {
        margin-bottom: -8rem !important;
    }
    .ml-sm--8,
    .mx-sm--8 {
        margin-left: -8rem !important;
    }
    .m-sm--7 {
        margin: -6rem !important;
    }
    .mt-sm--7,
    .my-sm--7 {
        margin-top: -6rem !important;
    }
    .mr-sm--7,
    .mx-sm--7 {
        margin-right: -6rem !important;
    }
    .mb-sm--7,
    .my-sm--7 {
        margin-bottom: -6rem !important;
    }
    .ml-sm--7,
    .mx-sm--7 {
        margin-left: -6rem !important;
    }
    .m-sm--6 {
        margin: -4.5rem !important;
    }
    .mt-sm--6,
    .my-sm--6 {
        margin-top: -4.5rem !important;
    }
    .mr-sm--6,
    .mx-sm--6 {
        margin-right: -4.5rem !important;
    }
    .mb-sm--6,
    .my-sm--6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-sm--6,
    .mx-sm--6 {
        margin-left: -4.5rem !important;
    }
    .m-sm--5 {
        margin: -3rem !important;
    }
    .mt-sm--5,
    .my-sm--5 {
        margin-top: -3rem !important;
    }
    .mr-sm--5,
    .mx-sm--5 {
        margin-right: -3rem !important;
    }
    .mb-sm--5,
    .my-sm--5 {
        margin-bottom: -3rem !important;
    }
    .ml-sm--5,
    .mx-sm--5 {
        margin-left: -3rem !important;
    }
    .m-sm--4 {
        margin: -1.5rem !important;
    }
    .mt-sm--4,
    .my-sm--4 {
        margin-top: -1.5rem !important;
    }
    .mr-sm--4,
    .mx-sm--4 {
        margin-right: -1.5rem !important;
    }
    .mb-sm--4,
    .my-sm--4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-sm--4,
    .mx-sm--4 {
        margin-left: -1.5rem !important;
    }
    .m-sm--3 {
        margin: -1rem !important;
    }
    .mt-sm--3,
    .my-sm--3 {
        margin-top: -1rem !important;
    }
    .mr-sm--3,
    .mx-sm--3 {
        margin-right: -1rem !important;
    }
    .mb-sm--3,
    .my-sm--3 {
        margin-bottom: -1rem !important;
    }
    .ml-sm--3,
    .mx-sm--3 {
        margin-left: -1rem !important;
    }
    .m-sm--2 {
        margin: -0.5rem !important;
    }
    .mt-sm--2,
    .my-sm--2 {
        margin-top: -0.5rem !important;
    }
    .mr-sm--2,
    .mx-sm--2 {
        margin-right: -0.5rem !important;
    }
    .mb-sm--2,
    .my-sm--2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-sm--2,
    .mx-sm--2 {
        margin-left: -0.5rem !important;
    }
    .m-sm--1 {
        margin: -0.25rem !important;
    }
    .mt-sm--1,
    .my-sm--1 {
        margin-top: -0.25rem !important;
    }
    .mr-sm--1,
    .mx-sm--1 {
        margin-right: -0.25rem !important;
    }
    .mb-sm--1,
    .my-sm--1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-sm--1,
    .mx-sm--1 {
        margin-left: -0.25rem !important;
    }
    .m-sm-6 {
        margin: 4.5rem !important;
    }
    .mt-sm-6,
    .my-sm-6 {
        margin-top: 4.5rem !important;
    }
    .mr-sm-6,
    .mx-sm-6 {
        margin-right: 4.5rem !important;
    }
    .mb-sm-6,
    .my-sm-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-sm-6,
    .mx-sm-6 {
        margin-left: 4.5rem !important;
    }
    .m-sm-7 {
        margin: 6rem !important;
    }
    .mt-sm-7,
    .my-sm-7 {
        margin-top: 6rem !important;
    }
    .mr-sm-7,
    .mx-sm-7 {
        margin-right: 6rem !important;
    }
    .mb-sm-7,
    .my-sm-7 {
        margin-bottom: 6rem !important;
    }
    .ml-sm-7,
    .mx-sm-7 {
        margin-left: 6rem !important;
    }
    .m-sm-8 {
        margin: 8rem !important;
    }
    .mt-sm-8,
    .my-sm-8 {
        margin-top: 8rem !important;
    }
    .mr-sm-8,
    .mx-sm-8 {
        margin-right: 8rem !important;
    }
    .mb-sm-8,
    .my-sm-8 {
        margin-bottom: 8rem !important;
    }
    .ml-sm-8,
    .mx-sm-8 {
        margin-left: 8rem !important;
    }
    .m-sm-9 {
        margin: 10rem !important;
    }
    .mt-sm-9,
    .my-sm-9 {
        margin-top: 10rem !important;
    }
    .mr-sm-9,
    .mx-sm-9 {
        margin-right: 10rem !important;
    }
    .mb-sm-9,
    .my-sm-9 {
        margin-bottom: 10rem !important;
    }
    .ml-sm-9,
    .mx-sm-9 {
        margin-left: 10rem !important;
    }
    .p-sm-0 {
        padding: 0 !important;
    }
    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important;
    }
    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important;
    }
    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important;
    }
    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important;
    }
    .p-sm-1 {
        padding: 0.25rem !important;
    }
    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem !important;
    }
    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem !important;
    }
    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem !important;
    }
    .p-sm-2 {
        padding: 0.5rem !important;
    }
    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem !important;
    }
    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem !important;
    }
    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem !important;
    }
    .p-sm-3 {
        padding: 1rem !important;
    }
    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem !important;
    }
    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem !important;
    }
    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem !important;
    }
    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem !important;
    }
    .p-sm-4 {
        padding: 1.5rem !important;
    }
    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem !important;
    }
    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem !important;
    }
    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem !important;
    }
    .p-sm-5 {
        padding: 3rem !important;
    }
    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem !important;
    }
    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem !important;
    }
    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem !important;
    }
    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem !important;
    }
    .p-sm-6 {
        padding: 4.5rem !important;
    }
    .pt-sm-6,
    .py-sm-6 {
        padding-top: 4.5rem !important;
    }
    .pr-sm-6,
    .px-sm-6 {
        padding-right: 4.5rem !important;
    }
    .pb-sm-6,
    .py-sm-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-sm-6,
    .px-sm-6 {
        padding-left: 4.5rem !important;
    }
    .p-sm-7 {
        padding: 6rem !important;
    }
    .pt-sm-7,
    .py-sm-7 {
        padding-top: 6rem !important;
    }
    .pr-sm-7,
    .px-sm-7 {
        padding-right: 6rem !important;
    }
    .pb-sm-7,
    .py-sm-7 {
        padding-bottom: 6rem !important;
    }
    .pl-sm-7,
    .px-sm-7 {
        padding-left: 6rem !important;
    }
    .p-sm-8 {
        padding: 8rem !important;
    }
    .pt-sm-8,
    .py-sm-8 {
        padding-top: 8rem !important;
    }
    .pr-sm-8,
    .px-sm-8 {
        padding-right: 8rem !important;
    }
    .pb-sm-8,
    .py-sm-8 {
        padding-bottom: 8rem !important;
    }
    .pl-sm-8,
    .px-sm-8 {
        padding-left: 8rem !important;
    }
    .p-sm-9 {
        padding: 10rem !important;
    }
    .pt-sm-9,
    .py-sm-9 {
        padding-top: 10rem !important;
    }
    .pr-sm-9,
    .px-sm-9 {
        padding-right: 10rem !important;
    }
    .pb-sm-9,
    .py-sm-9 {
        padding-bottom: 10rem !important;
    }
    .pl-sm-9,
    .px-sm-9 {
        padding-left: 10rem !important;
    }
    .m-sm-n1 {
        margin: -0.25rem !important;
    }
    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -0.25rem !important;
    }
    .m-sm-n2 {
        margin: -0.5rem !important;
    }
    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -0.5rem !important;
    }
    .m-sm-n3 {
        margin: -1rem !important;
    }
    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -1rem !important;
    }
    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -1rem !important;
    }
    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -1rem !important;
    }
    .m-sm-n4 {
        margin: -1.5rem !important;
    }
    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -1.5rem !important;
    }
    .m-sm-n5 {
        margin: -3rem !important;
    }
    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -3rem !important;
    }
    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -3rem !important;
    }
    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -3rem !important;
    }
    .m-sm-n-9 {
        margin: 10rem !important;
    }
    .mt-sm-n-9,
    .my-sm-n-9 {
        margin-top: 10rem !important;
    }
    .mr-sm-n-9,
    .mx-sm-n-9 {
        margin-right: 10rem !important;
    }
    .mb-sm-n-9,
    .my-sm-n-9 {
        margin-bottom: 10rem !important;
    }
    .ml-sm-n-9,
    .mx-sm-n-9 {
        margin-left: 10rem !important;
    }
    .m-sm-n-8 {
        margin: 8rem !important;
    }
    .mt-sm-n-8,
    .my-sm-n-8 {
        margin-top: 8rem !important;
    }
    .mr-sm-n-8,
    .mx-sm-n-8 {
        margin-right: 8rem !important;
    }
    .mb-sm-n-8,
    .my-sm-n-8 {
        margin-bottom: 8rem !important;
    }
    .ml-sm-n-8,
    .mx-sm-n-8 {
        margin-left: 8rem !important;
    }
    .m-sm-n-7 {
        margin: 6rem !important;
    }
    .mt-sm-n-7,
    .my-sm-n-7 {
        margin-top: 6rem !important;
    }
    .mr-sm-n-7,
    .mx-sm-n-7 {
        margin-right: 6rem !important;
    }
    .mb-sm-n-7,
    .my-sm-n-7 {
        margin-bottom: 6rem !important;
    }
    .ml-sm-n-7,
    .mx-sm-n-7 {
        margin-left: 6rem !important;
    }
    .m-sm-n-6 {
        margin: 4.5rem !important;
    }
    .mt-sm-n-6,
    .my-sm-n-6 {
        margin-top: 4.5rem !important;
    }
    .mr-sm-n-6,
    .mx-sm-n-6 {
        margin-right: 4.5rem !important;
    }
    .mb-sm-n-6,
    .my-sm-n-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-sm-n-6,
    .mx-sm-n-6 {
        margin-left: 4.5rem !important;
    }
    .m-sm-n-5 {
        margin: 3rem !important;
    }
    .mt-sm-n-5,
    .my-sm-n-5 {
        margin-top: 3rem !important;
    }
    .mr-sm-n-5,
    .mx-sm-n-5 {
        margin-right: 3rem !important;
    }
    .mb-sm-n-5,
    .my-sm-n-5 {
        margin-bottom: 3rem !important;
    }
    .ml-sm-n-5,
    .mx-sm-n-5 {
        margin-left: 3rem !important;
    }
    .m-sm-n-4 {
        margin: 1.5rem !important;
    }
    .mt-sm-n-4,
    .my-sm-n-4 {
        margin-top: 1.5rem !important;
    }
    .mr-sm-n-4,
    .mx-sm-n-4 {
        margin-right: 1.5rem !important;
    }
    .mb-sm-n-4,
    .my-sm-n-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-sm-n-4,
    .mx-sm-n-4 {
        margin-left: 1.5rem !important;
    }
    .m-sm-n-3 {
        margin: 1rem !important;
    }
    .mt-sm-n-3,
    .my-sm-n-3 {
        margin-top: 1rem !important;
    }
    .mr-sm-n-3,
    .mx-sm-n-3 {
        margin-right: 1rem !important;
    }
    .mb-sm-n-3,
    .my-sm-n-3 {
        margin-bottom: 1rem !important;
    }
    .ml-sm-n-3,
    .mx-sm-n-3 {
        margin-left: 1rem !important;
    }
    .m-sm-n-2 {
        margin: 0.5rem !important;
    }
    .mt-sm-n-2,
    .my-sm-n-2 {
        margin-top: 0.5rem !important;
    }
    .mr-sm-n-2,
    .mx-sm-n-2 {
        margin-right: 0.5rem !important;
    }
    .mb-sm-n-2,
    .my-sm-n-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-sm-n-2,
    .mx-sm-n-2 {
        margin-left: 0.5rem !important;
    }
    .m-sm-n-1 {
        margin: 0.25rem !important;
    }
    .mt-sm-n-1,
    .my-sm-n-1 {
        margin-top: 0.25rem !important;
    }
    .mr-sm-n-1,
    .mx-sm-n-1 {
        margin-right: 0.25rem !important;
    }
    .mb-sm-n-1,
    .my-sm-n-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-sm-n-1,
    .mx-sm-n-1 {
        margin-left: 0.25rem !important;
    }
    .m-sm-n6 {
        margin: -4.5rem !important;
    }
    .mt-sm-n6,
    .my-sm-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-sm-n6,
    .mx-sm-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-sm-n6,
    .my-sm-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-sm-n6,
    .mx-sm-n6 {
        margin-left: -4.5rem !important;
    }
    .m-sm-n7 {
        margin: -6rem !important;
    }
    .mt-sm-n7,
    .my-sm-n7 {
        margin-top: -6rem !important;
    }
    .mr-sm-n7,
    .mx-sm-n7 {
        margin-right: -6rem !important;
    }
    .mb-sm-n7,
    .my-sm-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-sm-n7,
    .mx-sm-n7 {
        margin-left: -6rem !important;
    }
    .m-sm-n8 {
        margin: -8rem !important;
    }
    .mt-sm-n8,
    .my-sm-n8 {
        margin-top: -8rem !important;
    }
    .mr-sm-n8,
    .mx-sm-n8 {
        margin-right: -8rem !important;
    }
    .mb-sm-n8,
    .my-sm-n8 {
        margin-bottom: -8rem !important;
    }
    .ml-sm-n8,
    .mx-sm-n8 {
        margin-left: -8rem !important;
    }
    .m-sm-n9 {
        margin: -10rem !important;
    }
    .mt-sm-n9,
    .my-sm-n9 {
        margin-top: -10rem !important;
    }
    .mr-sm-n9,
    .mx-sm-n9 {
        margin-right: -10rem !important;
    }
    .mb-sm-n9,
    .my-sm-n9 {
        margin-bottom: -10rem !important;
    }
    .ml-sm-n9,
    .mx-sm-n9 {
        margin-left: -10rem !important;
    }
    .m-sm-auto {
        margin: auto !important;
    }
    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important;
    }
    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important;
    }
    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important;
    }
    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }
    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important;
    }
    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important;
    }
    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }
    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important;
    }
    .m-md-1 {
        margin: 0.25rem !important;
    }
    .mt-md-1,
    .my-md-1 {
        margin-top: 0.25rem !important;
    }
    .mr-md-1,
    .mx-md-1 {
        margin-right: 0.25rem !important;
    }
    .mb-md-1,
    .my-md-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-md-1,
    .mx-md-1 {
        margin-left: 0.25rem !important;
    }
    .m-md-2 {
        margin: 0.5rem !important;
    }
    .mt-md-2,
    .my-md-2 {
        margin-top: 0.5rem !important;
    }
    .mr-md-2,
    .mx-md-2 {
        margin-right: 0.5rem !important;
    }
    .mb-md-2,
    .my-md-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-md-2,
    .mx-md-2 {
        margin-left: 0.5rem !important;
    }
    .m-md-3 {
        margin: 1rem !important;
    }
    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem !important;
    }
    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem !important;
    }
    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem !important;
    }
    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem !important;
    }
    .m-md-4 {
        margin: 1.5rem !important;
    }
    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem !important;
    }
    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem !important;
    }
    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem !important;
    }
    .m-md-5 {
        margin: 3rem !important;
    }
    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem !important;
    }
    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem !important;
    }
    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem !important;
    }
    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem !important;
    }
    .m-md--9 {
        margin: -10rem !important;
    }
    .mt-md--9,
    .my-md--9 {
        margin-top: -10rem !important;
    }
    .mr-md--9,
    .mx-md--9 {
        margin-right: -10rem !important;
    }
    .mb-md--9,
    .my-md--9 {
        margin-bottom: -10rem !important;
    }
    .ml-md--9,
    .mx-md--9 {
        margin-left: -10rem !important;
    }
    .m-md--8 {
        margin: -8rem !important;
    }
    .mt-md--8,
    .my-md--8 {
        margin-top: -8rem !important;
    }
    .mr-md--8,
    .mx-md--8 {
        margin-right: -8rem !important;
    }
    .mb-md--8,
    .my-md--8 {
        margin-bottom: -8rem !important;
    }
    .ml-md--8,
    .mx-md--8 {
        margin-left: -8rem !important;
    }
    .m-md--7 {
        margin: -6rem !important;
    }
    .mt-md--7,
    .my-md--7 {
        margin-top: -6rem !important;
    }
    .mr-md--7,
    .mx-md--7 {
        margin-right: -6rem !important;
    }
    .mb-md--7,
    .my-md--7 {
        margin-bottom: -6rem !important;
    }
    .ml-md--7,
    .mx-md--7 {
        margin-left: -6rem !important;
    }
    .m-md--6 {
        margin: -4.5rem !important;
    }
    .mt-md--6,
    .my-md--6 {
        margin-top: -4.5rem !important;
    }
    .mr-md--6,
    .mx-md--6 {
        margin-right: -4.5rem !important;
    }
    .mb-md--6,
    .my-md--6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-md--6,
    .mx-md--6 {
        margin-left: -4.5rem !important;
    }
    .m-md--5 {
        margin: -3rem !important;
    }
    .mt-md--5,
    .my-md--5 {
        margin-top: -3rem !important;
    }
    .mr-md--5,
    .mx-md--5 {
        margin-right: -3rem !important;
    }
    .mb-md--5,
    .my-md--5 {
        margin-bottom: -3rem !important;
    }
    .ml-md--5,
    .mx-md--5 {
        margin-left: -3rem !important;
    }
    .m-md--4 {
        margin: -1.5rem !important;
    }
    .mt-md--4,
    .my-md--4 {
        margin-top: -1.5rem !important;
    }
    .mr-md--4,
    .mx-md--4 {
        margin-right: -1.5rem !important;
    }
    .mb-md--4,
    .my-md--4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-md--4,
    .mx-md--4 {
        margin-left: -1.5rem !important;
    }
    .m-md--3 {
        margin: -1rem !important;
    }
    .mt-md--3,
    .my-md--3 {
        margin-top: -1rem !important;
    }
    .mr-md--3,
    .mx-md--3 {
        margin-right: -1rem !important;
    }
    .mb-md--3,
    .my-md--3 {
        margin-bottom: -1rem !important;
    }
    .ml-md--3,
    .mx-md--3 {
        margin-left: -1rem !important;
    }
    .m-md--2 {
        margin: -0.5rem !important;
    }
    .mt-md--2,
    .my-md--2 {
        margin-top: -0.5rem !important;
    }
    .mr-md--2,
    .mx-md--2 {
        margin-right: -0.5rem !important;
    }
    .mb-md--2,
    .my-md--2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-md--2,
    .mx-md--2 {
        margin-left: -0.5rem !important;
    }
    .m-md--1 {
        margin: -0.25rem !important;
    }
    .mt-md--1,
    .my-md--1 {
        margin-top: -0.25rem !important;
    }
    .mr-md--1,
    .mx-md--1 {
        margin-right: -0.25rem !important;
    }
    .mb-md--1,
    .my-md--1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-md--1,
    .mx-md--1 {
        margin-left: -0.25rem !important;
    }
    .m-md-6 {
        margin: 4.5rem !important;
    }
    .mt-md-6,
    .my-md-6 {
        margin-top: 4.5rem !important;
    }
    .mr-md-6,
    .mx-md-6 {
        margin-right: 4.5rem !important;
    }
    .mb-md-6,
    .my-md-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-md-6,
    .mx-md-6 {
        margin-left: 4.5rem !important;
    }
    .m-md-7 {
        margin: 6rem !important;
    }
    .mt-md-7,
    .my-md-7 {
        margin-top: 6rem !important;
    }
    .mr-md-7,
    .mx-md-7 {
        margin-right: 6rem !important;
    }
    .mb-md-7,
    .my-md-7 {
        margin-bottom: 6rem !important;
    }
    .ml-md-7,
    .mx-md-7 {
        margin-left: 6rem !important;
    }
    .m-md-8 {
        margin: 8rem !important;
    }
    .mt-md-8,
    .my-md-8 {
        margin-top: 8rem !important;
    }
    .mr-md-8,
    .mx-md-8 {
        margin-right: 8rem !important;
    }
    .mb-md-8,
    .my-md-8 {
        margin-bottom: 8rem !important;
    }
    .ml-md-8,
    .mx-md-8 {
        margin-left: 8rem !important;
    }
    .m-md-9 {
        margin: 10rem !important;
    }
    .mt-md-9,
    .my-md-9 {
        margin-top: 10rem !important;
    }
    .mr-md-9,
    .mx-md-9 {
        margin-right: 10rem !important;
    }
    .mb-md-9,
    .my-md-9 {
        margin-bottom: 10rem !important;
    }
    .ml-md-9,
    .mx-md-9 {
        margin-left: 10rem !important;
    }
    .p-md-0 {
        padding: 0 !important;
    }
    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important;
    }
    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important;
    }
    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important;
    }
    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important;
    }
    .p-md-1 {
        padding: 0.25rem !important;
    }
    .pt-md-1,
    .py-md-1 {
        padding-top: 0.25rem !important;
    }
    .pr-md-1,
    .px-md-1 {
        padding-right: 0.25rem !important;
    }
    .pb-md-1,
    .py-md-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-md-1,
    .px-md-1 {
        padding-left: 0.25rem !important;
    }
    .p-md-2 {
        padding: 0.5rem !important;
    }
    .pt-md-2,
    .py-md-2 {
        padding-top: 0.5rem !important;
    }
    .pr-md-2,
    .px-md-2 {
        padding-right: 0.5rem !important;
    }
    .pb-md-2,
    .py-md-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-md-2,
    .px-md-2 {
        padding-left: 0.5rem !important;
    }
    .p-md-3 {
        padding: 1rem !important;
    }
    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem !important;
    }
    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem !important;
    }
    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem !important;
    }
    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem !important;
    }
    .p-md-4 {
        padding: 1.5rem !important;
    }
    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem !important;
    }
    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem !important;
    }
    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem !important;
    }
    .p-md-5 {
        padding: 3rem !important;
    }
    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem !important;
    }
    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem !important;
    }
    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem !important;
    }
    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem !important;
    }
    .p-md-6 {
        padding: 4.5rem !important;
    }
    .pt-md-6,
    .py-md-6 {
        padding-top: 4.5rem !important;
    }
    .pr-md-6,
    .px-md-6 {
        padding-right: 4.5rem !important;
    }
    .pb-md-6,
    .py-md-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-md-6,
    .px-md-6 {
        padding-left: 4.5rem !important;
    }
    .p-md-7 {
        padding: 6rem !important;
    }
    .pt-md-7,
    .py-md-7 {
        padding-top: 6rem !important;
    }
    .pr-md-7,
    .px-md-7 {
        padding-right: 6rem !important;
    }
    .pb-md-7,
    .py-md-7 {
        padding-bottom: 6rem !important;
    }
    .pl-md-7,
    .px-md-7 {
        padding-left: 6rem !important;
    }
    .p-md-8 {
        padding: 8rem !important;
    }
    .pt-md-8,
    .py-md-8 {
        padding-top: 8rem !important;
    }
    .pr-md-8,
    .px-md-8 {
        padding-right: 8rem !important;
    }
    .pb-md-8,
    .py-md-8 {
        padding-bottom: 8rem !important;
    }
    .pl-md-8,
    .px-md-8 {
        padding-left: 8rem !important;
    }
    .p-md-9 {
        padding: 10rem !important;
    }
    .pt-md-9,
    .py-md-9 {
        padding-top: 10rem !important;
    }
    .pr-md-9,
    .px-md-9 {
        padding-right: 10rem !important;
    }
    .pb-md-9,
    .py-md-9 {
        padding-bottom: 10rem !important;
    }
    .pl-md-9,
    .px-md-9 {
        padding-left: 10rem !important;
    }
    .m-md-n1 {
        margin: -0.25rem !important;
    }
    .mt-md-n1,
    .my-md-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -0.25rem !important;
    }
    .m-md-n2 {
        margin: -0.5rem !important;
    }
    .mt-md-n2,
    .my-md-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -0.5rem !important;
    }
    .m-md-n3 {
        margin: -1rem !important;
    }
    .mt-md-n3,
    .my-md-n3 {
        margin-top: -1rem !important;
    }
    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -1rem !important;
    }
    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -1rem !important;
    }
    .m-md-n4 {
        margin: -1.5rem !important;
    }
    .mt-md-n4,
    .my-md-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -1.5rem !important;
    }
    .m-md-n5 {
        margin: -3rem !important;
    }
    .mt-md-n5,
    .my-md-n5 {
        margin-top: -3rem !important;
    }
    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -3rem !important;
    }
    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -3rem !important;
    }
    .m-md-n-9 {
        margin: 10rem !important;
    }
    .mt-md-n-9,
    .my-md-n-9 {
        margin-top: 10rem !important;
    }
    .mr-md-n-9,
    .mx-md-n-9 {
        margin-right: 10rem !important;
    }
    .mb-md-n-9,
    .my-md-n-9 {
        margin-bottom: 10rem !important;
    }
    .ml-md-n-9,
    .mx-md-n-9 {
        margin-left: 10rem !important;
    }
    .m-md-n-8 {
        margin: 8rem !important;
    }
    .mt-md-n-8,
    .my-md-n-8 {
        margin-top: 8rem !important;
    }
    .mr-md-n-8,
    .mx-md-n-8 {
        margin-right: 8rem !important;
    }
    .mb-md-n-8,
    .my-md-n-8 {
        margin-bottom: 8rem !important;
    }
    .ml-md-n-8,
    .mx-md-n-8 {
        margin-left: 8rem !important;
    }
    .m-md-n-7 {
        margin: 6rem !important;
    }
    .mt-md-n-7,
    .my-md-n-7 {
        margin-top: 6rem !important;
    }
    .mr-md-n-7,
    .mx-md-n-7 {
        margin-right: 6rem !important;
    }
    .mb-md-n-7,
    .my-md-n-7 {
        margin-bottom: 6rem !important;
    }
    .ml-md-n-7,
    .mx-md-n-7 {
        margin-left: 6rem !important;
    }
    .m-md-n-6 {
        margin: 4.5rem !important;
    }
    .mt-md-n-6,
    .my-md-n-6 {
        margin-top: 4.5rem !important;
    }
    .mr-md-n-6,
    .mx-md-n-6 {
        margin-right: 4.5rem !important;
    }
    .mb-md-n-6,
    .my-md-n-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-md-n-6,
    .mx-md-n-6 {
        margin-left: 4.5rem !important;
    }
    .m-md-n-5 {
        margin: 3rem !important;
    }
    .mt-md-n-5,
    .my-md-n-5 {
        margin-top: 3rem !important;
    }
    .mr-md-n-5,
    .mx-md-n-5 {
        margin-right: 3rem !important;
    }
    .mb-md-n-5,
    .my-md-n-5 {
        margin-bottom: 3rem !important;
    }
    .ml-md-n-5,
    .mx-md-n-5 {
        margin-left: 3rem !important;
    }
    .m-md-n-4 {
        margin: 1.5rem !important;
    }
    .mt-md-n-4,
    .my-md-n-4 {
        margin-top: 1.5rem !important;
    }
    .mr-md-n-4,
    .mx-md-n-4 {
        margin-right: 1.5rem !important;
    }
    .mb-md-n-4,
    .my-md-n-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-md-n-4,
    .mx-md-n-4 {
        margin-left: 1.5rem !important;
    }
    .m-md-n-3 {
        margin: 1rem !important;
    }
    .mt-md-n-3,
    .my-md-n-3 {
        margin-top: 1rem !important;
    }
    .mr-md-n-3,
    .mx-md-n-3 {
        margin-right: 1rem !important;
    }
    .mb-md-n-3,
    .my-md-n-3 {
        margin-bottom: 1rem !important;
    }
    .ml-md-n-3,
    .mx-md-n-3 {
        margin-left: 1rem !important;
    }
    .m-md-n-2 {
        margin: 0.5rem !important;
    }
    .mt-md-n-2,
    .my-md-n-2 {
        margin-top: 0.5rem !important;
    }
    .mr-md-n-2,
    .mx-md-n-2 {
        margin-right: 0.5rem !important;
    }
    .mb-md-n-2,
    .my-md-n-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-md-n-2,
    .mx-md-n-2 {
        margin-left: 0.5rem !important;
    }
    .m-md-n-1 {
        margin: 0.25rem !important;
    }
    .mt-md-n-1,
    .my-md-n-1 {
        margin-top: 0.25rem !important;
    }
    .mr-md-n-1,
    .mx-md-n-1 {
        margin-right: 0.25rem !important;
    }
    .mb-md-n-1,
    .my-md-n-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-md-n-1,
    .mx-md-n-1 {
        margin-left: 0.25rem !important;
    }
    .m-md-n6 {
        margin: -4.5rem !important;
    }
    .mt-md-n6,
    .my-md-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-md-n6,
    .mx-md-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-md-n6,
    .my-md-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-md-n6,
    .mx-md-n6 {
        margin-left: -4.5rem !important;
    }
    .m-md-n7 {
        margin: -6rem !important;
    }
    .mt-md-n7,
    .my-md-n7 {
        margin-top: -6rem !important;
    }
    .mr-md-n7,
    .mx-md-n7 {
        margin-right: -6rem !important;
    }
    .mb-md-n7,
    .my-md-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-md-n7,
    .mx-md-n7 {
        margin-left: -6rem !important;
    }
    .m-md-n8 {
        margin: -8rem !important;
    }
    .mt-md-n8,
    .my-md-n8 {
        margin-top: -8rem !important;
    }
    .mr-md-n8,
    .mx-md-n8 {
        margin-right: -8rem !important;
    }
    .mb-md-n8,
    .my-md-n8 {
        margin-bottom: -8rem !important;
    }
    .ml-md-n8,
    .mx-md-n8 {
        margin-left: -8rem !important;
    }
    .m-md-n9 {
        margin: -10rem !important;
    }
    .mt-md-n9,
    .my-md-n9 {
        margin-top: -10rem !important;
    }
    .mr-md-n9,
    .mx-md-n9 {
        margin-right: -10rem !important;
    }
    .mb-md-n9,
    .my-md-n9 {
        margin-bottom: -10rem !important;
    }
    .ml-md-n9,
    .mx-md-n9 {
        margin-left: -10rem !important;
    }
    .m-md-auto {
        margin: auto !important;
    }
    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important;
    }
    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important;
    }
    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important;
    }
    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }
    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important;
    }
    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important;
    }
    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important;
    }
    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important;
    }
    .m-lg-1 {
        margin: 0.25rem !important;
    }
    .mt-lg-1,
    .my-lg-1 {
        margin-top: 0.25rem !important;
    }
    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 0.25rem !important;
    }
    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 0.25rem !important;
    }
    .m-lg-2 {
        margin: 0.5rem !important;
    }
    .mt-lg-2,
    .my-lg-2 {
        margin-top: 0.5rem !important;
    }
    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 0.5rem !important;
    }
    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 0.5rem !important;
    }
    .m-lg-3 {
        margin: 1rem !important;
    }
    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem !important;
    }
    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem !important;
    }
    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem !important;
    }
    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem !important;
    }
    .m-lg-4 {
        margin: 1.5rem !important;
    }
    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem !important;
    }
    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem !important;
    }
    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem !important;
    }
    .m-lg-5 {
        margin: 3rem !important;
    }
    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem !important;
    }
    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem !important;
    }
    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem !important;
    }
    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem !important;
    }
    .m-lg--9 {
        margin: -10rem !important;
    }
    .mt-lg--9,
    .my-lg--9 {
        margin-top: -10rem !important;
    }
    .mr-lg--9,
    .mx-lg--9 {
        margin-right: -10rem !important;
    }
    .mb-lg--9,
    .my-lg--9 {
        margin-bottom: -10rem !important;
    }
    .ml-lg--9,
    .mx-lg--9 {
        margin-left: -10rem !important;
    }
    .m-lg--8 {
        margin: -8rem !important;
    }
    .mt-lg--8,
    .my-lg--8 {
        margin-top: -8rem !important;
    }
    .mr-lg--8,
    .mx-lg--8 {
        margin-right: -8rem !important;
    }
    .mb-lg--8,
    .my-lg--8 {
        margin-bottom: -8rem !important;
    }
    .ml-lg--8,
    .mx-lg--8 {
        margin-left: -8rem !important;
    }
    .m-lg--7 {
        margin: -6rem !important;
    }
    .mt-lg--7,
    .my-lg--7 {
        margin-top: -6rem !important;
    }
    .mr-lg--7,
    .mx-lg--7 {
        margin-right: -6rem !important;
    }
    .mb-lg--7,
    .my-lg--7 {
        margin-bottom: -6rem !important;
    }
    .ml-lg--7,
    .mx-lg--7 {
        margin-left: -6rem !important;
    }
    .m-lg--6 {
        margin: -4.5rem !important;
    }
    .mt-lg--6,
    .my-lg--6 {
        margin-top: -4.5rem !important;
    }
    .mr-lg--6,
    .mx-lg--6 {
        margin-right: -4.5rem !important;
    }
    .mb-lg--6,
    .my-lg--6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-lg--6,
    .mx-lg--6 {
        margin-left: -4.5rem !important;
    }
    .m-lg--5 {
        margin: -3rem !important;
    }
    .mt-lg--5,
    .my-lg--5 {
        margin-top: -3rem !important;
    }
    .mr-lg--5,
    .mx-lg--5 {
        margin-right: -3rem !important;
    }
    .mb-lg--5,
    .my-lg--5 {
        margin-bottom: -3rem !important;
    }
    .ml-lg--5,
    .mx-lg--5 {
        margin-left: -3rem !important;
    }
    .m-lg--4 {
        margin: -1.5rem !important;
    }
    .mt-lg--4,
    .my-lg--4 {
        margin-top: -1.5rem !important;
    }
    .mr-lg--4,
    .mx-lg--4 {
        margin-right: -1.5rem !important;
    }
    .mb-lg--4,
    .my-lg--4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-lg--4,
    .mx-lg--4 {
        margin-left: -1.5rem !important;
    }
    .m-lg--3 {
        margin: -1rem !important;
    }
    .mt-lg--3,
    .my-lg--3 {
        margin-top: -1rem !important;
    }
    .mr-lg--3,
    .mx-lg--3 {
        margin-right: -1rem !important;
    }
    .mb-lg--3,
    .my-lg--3 {
        margin-bottom: -1rem !important;
    }
    .ml-lg--3,
    .mx-lg--3 {
        margin-left: -1rem !important;
    }
    .m-lg--2 {
        margin: -0.5rem !important;
    }
    .mt-lg--2,
    .my-lg--2 {
        margin-top: -0.5rem !important;
    }
    .mr-lg--2,
    .mx-lg--2 {
        margin-right: -0.5rem !important;
    }
    .mb-lg--2,
    .my-lg--2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-lg--2,
    .mx-lg--2 {
        margin-left: -0.5rem !important;
    }
    .m-lg--1 {
        margin: -0.25rem !important;
    }
    .mt-lg--1,
    .my-lg--1 {
        margin-top: -0.25rem !important;
    }
    .mr-lg--1,
    .mx-lg--1 {
        margin-right: -0.25rem !important;
    }
    .mb-lg--1,
    .my-lg--1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-lg--1,
    .mx-lg--1 {
        margin-left: -0.25rem !important;
    }
    .m-lg-6 {
        margin: 4.5rem !important;
    }
    .mt-lg-6,
    .my-lg-6 {
        margin-top: 4.5rem !important;
    }
    .mr-lg-6,
    .mx-lg-6 {
        margin-right: 4.5rem !important;
    }
    .mb-lg-6,
    .my-lg-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-lg-6,
    .mx-lg-6 {
        margin-left: 4.5rem !important;
    }
    .m-lg-7 {
        margin: 6rem !important;
    }
    .mt-lg-7,
    .my-lg-7 {
        margin-top: 6rem !important;
    }
    .mr-lg-7,
    .mx-lg-7 {
        margin-right: 6rem !important;
    }
    .mb-lg-7,
    .my-lg-7 {
        margin-bottom: 6rem !important;
    }
    .ml-lg-7,
    .mx-lg-7 {
        margin-left: 6rem !important;
    }
    .m-lg-8 {
        margin: 8rem !important;
    }
    .mt-lg-8,
    .my-lg-8 {
        margin-top: 8rem !important;
    }
    .mr-lg-8,
    .mx-lg-8 {
        margin-right: 8rem !important;
    }
    .mb-lg-8,
    .my-lg-8 {
        margin-bottom: 8rem !important;
    }
    .ml-lg-8,
    .mx-lg-8 {
        margin-left: 8rem !important;
    }
    .m-lg-9 {
        margin: 10rem !important;
    }
    .mt-lg-9,
    .my-lg-9 {
        margin-top: 10rem !important;
    }
    .mr-lg-9,
    .mx-lg-9 {
        margin-right: 10rem !important;
    }
    .mb-lg-9,
    .my-lg-9 {
        margin-bottom: 10rem !important;
    }
    .ml-lg-9,
    .mx-lg-9 {
        margin-left: 10rem !important;
    }
    .p-lg-0 {
        padding: 0 !important;
    }
    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important;
    }
    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important;
    }
    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important;
    }
    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important;
    }
    .p-lg-1 {
        padding: 0.25rem !important;
    }
    .pt-lg-1,
    .py-lg-1 {
        padding-top: 0.25rem !important;
    }
    .pr-lg-1,
    .px-lg-1 {
        padding-right: 0.25rem !important;
    }
    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-lg-1,
    .px-lg-1 {
        padding-left: 0.25rem !important;
    }
    .p-lg-2 {
        padding: 0.5rem !important;
    }
    .pt-lg-2,
    .py-lg-2 {
        padding-top: 0.5rem !important;
    }
    .pr-lg-2,
    .px-lg-2 {
        padding-right: 0.5rem !important;
    }
    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-lg-2,
    .px-lg-2 {
        padding-left: 0.5rem !important;
    }
    .p-lg-3 {
        padding: 1rem !important;
    }
    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem !important;
    }
    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem !important;
    }
    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem !important;
    }
    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem !important;
    }
    .p-lg-4 {
        padding: 1.5rem !important;
    }
    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem !important;
    }
    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem !important;
    }
    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem !important;
    }
    .p-lg-5 {
        padding: 3rem !important;
    }
    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem !important;
    }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important;
    }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important;
    }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important;
    }
    .p-lg-6 {
        padding: 4.5rem !important;
    }
    .pt-lg-6,
    .py-lg-6 {
        padding-top: 4.5rem !important;
    }
    .pr-lg-6,
    .px-lg-6 {
        padding-right: 4.5rem !important;
    }
    .pb-lg-6,
    .py-lg-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-lg-6,
    .px-lg-6 {
        padding-left: 4.5rem !important;
    }
    .p-lg-7 {
        padding: 6rem !important;
    }
    .pt-lg-7,
    .py-lg-7 {
        padding-top: 6rem !important;
    }
    .pr-lg-7,
    .px-lg-7 {
        padding-right: 6rem !important;
    }
    .pb-lg-7,
    .py-lg-7 {
        padding-bottom: 6rem !important;
    }
    .pl-lg-7,
    .px-lg-7 {
        padding-left: 6rem !important;
    }
    .p-lg-8 {
        padding: 8rem !important;
    }
    .pt-lg-8,
    .py-lg-8 {
        padding-top: 8rem !important;
    }
    .pr-lg-8,
    .px-lg-8 {
        padding-right: 8rem !important;
    }
    .pb-lg-8,
    .py-lg-8 {
        padding-bottom: 8rem !important;
    }
    .pl-lg-8,
    .px-lg-8 {
        padding-left: 8rem !important;
    }
    .p-lg-9 {
        padding: 10rem !important;
    }
    .pt-lg-9,
    .py-lg-9 {
        padding-top: 10rem !important;
    }
    .pr-lg-9,
    .px-lg-9 {
        padding-right: 10rem !important;
    }
    .pb-lg-9,
    .py-lg-9 {
        padding-bottom: 10rem !important;
    }
    .pl-lg-9,
    .px-lg-9 {
        padding-left: 10rem !important;
    }
    .m-lg-n1 {
        margin: -0.25rem !important;
    }
    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -0.25rem !important;
    }
    .m-lg-n2 {
        margin: -0.5rem !important;
    }
    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -0.5rem !important;
    }
    .m-lg-n3 {
        margin: -1rem !important;
    }
    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -1rem !important;
    }
    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -1rem !important;
    }
    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -1rem !important;
    }
    .m-lg-n4 {
        margin: -1.5rem !important;
    }
    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -1.5rem !important;
    }
    .m-lg-n5 {
        margin: -3rem !important;
    }
    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -3rem !important;
    }
    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -3rem !important;
    }
    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -3rem !important;
    }
    .m-lg-n-9 {
        margin: 10rem !important;
    }
    .mt-lg-n-9,
    .my-lg-n-9 {
        margin-top: 10rem !important;
    }
    .mr-lg-n-9,
    .mx-lg-n-9 {
        margin-right: 10rem !important;
    }
    .mb-lg-n-9,
    .my-lg-n-9 {
        margin-bottom: 10rem !important;
    }
    .ml-lg-n-9,
    .mx-lg-n-9 {
        margin-left: 10rem !important;
    }
    .m-lg-n-8 {
        margin: 8rem !important;
    }
    .mt-lg-n-8,
    .my-lg-n-8 {
        margin-top: 8rem !important;
    }
    .mr-lg-n-8,
    .mx-lg-n-8 {
        margin-right: 8rem !important;
    }
    .mb-lg-n-8,
    .my-lg-n-8 {
        margin-bottom: 8rem !important;
    }
    .ml-lg-n-8,
    .mx-lg-n-8 {
        margin-left: 8rem !important;
    }
    .m-lg-n-7 {
        margin: 6rem !important;
    }
    .mt-lg-n-7,
    .my-lg-n-7 {
        margin-top: 6rem !important;
    }
    .mr-lg-n-7,
    .mx-lg-n-7 {
        margin-right: 6rem !important;
    }
    .mb-lg-n-7,
    .my-lg-n-7 {
        margin-bottom: 6rem !important;
    }
    .ml-lg-n-7,
    .mx-lg-n-7 {
        margin-left: 6rem !important;
    }
    .m-lg-n-6 {
        margin: 4.5rem !important;
    }
    .mt-lg-n-6,
    .my-lg-n-6 {
        margin-top: 4.5rem !important;
    }
    .mr-lg-n-6,
    .mx-lg-n-6 {
        margin-right: 4.5rem !important;
    }
    .mb-lg-n-6,
    .my-lg-n-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-lg-n-6,
    .mx-lg-n-6 {
        margin-left: 4.5rem !important;
    }
    .m-lg-n-5 {
        margin: 3rem !important;
    }
    .mt-lg-n-5,
    .my-lg-n-5 {
        margin-top: 3rem !important;
    }
    .mr-lg-n-5,
    .mx-lg-n-5 {
        margin-right: 3rem !important;
    }
    .mb-lg-n-5,
    .my-lg-n-5 {
        margin-bottom: 3rem !important;
    }
    .ml-lg-n-5,
    .mx-lg-n-5 {
        margin-left: 3rem !important;
    }
    .m-lg-n-4 {
        margin: 1.5rem !important;
    }
    .mt-lg-n-4,
    .my-lg-n-4 {
        margin-top: 1.5rem !important;
    }
    .mr-lg-n-4,
    .mx-lg-n-4 {
        margin-right: 1.5rem !important;
    }
    .mb-lg-n-4,
    .my-lg-n-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-lg-n-4,
    .mx-lg-n-4 {
        margin-left: 1.5rem !important;
    }
    .m-lg-n-3 {
        margin: 1rem !important;
    }
    .mt-lg-n-3,
    .my-lg-n-3 {
        margin-top: 1rem !important;
    }
    .mr-lg-n-3,
    .mx-lg-n-3 {
        margin-right: 1rem !important;
    }
    .mb-lg-n-3,
    .my-lg-n-3 {
        margin-bottom: 1rem !important;
    }
    .ml-lg-n-3,
    .mx-lg-n-3 {
        margin-left: 1rem !important;
    }
    .m-lg-n-2 {
        margin: 0.5rem !important;
    }
    .mt-lg-n-2,
    .my-lg-n-2 {
        margin-top: 0.5rem !important;
    }
    .mr-lg-n-2,
    .mx-lg-n-2 {
        margin-right: 0.5rem !important;
    }
    .mb-lg-n-2,
    .my-lg-n-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-lg-n-2,
    .mx-lg-n-2 {
        margin-left: 0.5rem !important;
    }
    .m-lg-n-1 {
        margin: 0.25rem !important;
    }
    .mt-lg-n-1,
    .my-lg-n-1 {
        margin-top: 0.25rem !important;
    }
    .mr-lg-n-1,
    .mx-lg-n-1 {
        margin-right: 0.25rem !important;
    }
    .mb-lg-n-1,
    .my-lg-n-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-lg-n-1,
    .mx-lg-n-1 {
        margin-left: 0.25rem !important;
    }
    .m-lg-n6 {
        margin: -4.5rem !important;
    }
    .mt-lg-n6,
    .my-lg-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-lg-n6,
    .mx-lg-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-lg-n6,
    .my-lg-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-lg-n6,
    .mx-lg-n6 {
        margin-left: -4.5rem !important;
    }
    .m-lg-n7 {
        margin: -6rem !important;
    }
    .mt-lg-n7,
    .my-lg-n7 {
        margin-top: -6rem !important;
    }
    .mr-lg-n7,
    .mx-lg-n7 {
        margin-right: -6rem !important;
    }
    .mb-lg-n7,
    .my-lg-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-lg-n7,
    .mx-lg-n7 {
        margin-left: -6rem !important;
    }
    .m-lg-n8 {
        margin: -8rem !important;
    }
    .mt-lg-n8,
    .my-lg-n8 {
        margin-top: -8rem !important;
    }
    .mr-lg-n8,
    .mx-lg-n8 {
        margin-right: -8rem !important;
    }
    .mb-lg-n8,
    .my-lg-n8 {
        margin-bottom: -8rem !important;
    }
    .ml-lg-n8,
    .mx-lg-n8 {
        margin-left: -8rem !important;
    }
    .m-lg-n9 {
        margin: -10rem !important;
    }
    .mt-lg-n9,
    .my-lg-n9 {
        margin-top: -10rem !important;
    }
    .mr-lg-n9,
    .mx-lg-n9 {
        margin-right: -10rem !important;
    }
    .mb-lg-n9,
    .my-lg-n9 {
        margin-bottom: -10rem !important;
    }
    .ml-lg-n9,
    .mx-lg-n9 {
        margin-left: -10rem !important;
    }
    .m-lg-auto {
        margin: auto !important;
    }
    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important;
    }
    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }
    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important;
    }
    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
}
@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important;
    }
    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important;
    }
    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important;
    }
    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important;
    }
    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important;
    }
    .m-xl-1 {
        margin: 0.25rem !important;
    }
    .mt-xl-1,
    .my-xl-1 {
        margin-top: 0.25rem !important;
    }
    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 0.25rem !important;
    }
    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 0.25rem !important;
    }
    .m-xl-2 {
        margin: 0.5rem !important;
    }
    .mt-xl-2,
    .my-xl-2 {
        margin-top: 0.5rem !important;
    }
    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 0.5rem !important;
    }
    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 0.5rem !important;
    }
    .m-xl-3 {
        margin: 1rem !important;
    }
    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem !important;
    }
    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem !important;
    }
    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem !important;
    }
    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem !important;
    }
    .m-xl-4 {
        margin: 1.5rem !important;
    }
    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem !important;
    }
    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem !important;
    }
    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem !important;
    }
    .m-xl-5 {
        margin: 3rem !important;
    }
    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem !important;
    }
    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem !important;
    }
    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem !important;
    }
    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem !important;
    }
    .m-xl--9 {
        margin: -10rem !important;
    }
    .mt-xl--9,
    .my-xl--9 {
        margin-top: -10rem !important;
    }
    .mr-xl--9,
    .mx-xl--9 {
        margin-right: -10rem !important;
    }
    .mb-xl--9,
    .my-xl--9 {
        margin-bottom: -10rem !important;
    }
    .ml-xl--9,
    .mx-xl--9 {
        margin-left: -10rem !important;
    }
    .m-xl--8 {
        margin: -8rem !important;
    }
    .mt-xl--8,
    .my-xl--8 {
        margin-top: -8rem !important;
    }
    .mr-xl--8,
    .mx-xl--8 {
        margin-right: -8rem !important;
    }
    .mb-xl--8,
    .my-xl--8 {
        margin-bottom: -8rem !important;
    }
    .ml-xl--8,
    .mx-xl--8 {
        margin-left: -8rem !important;
    }
    .m-xl--7 {
        margin: -6rem !important;
    }
    .mt-xl--7,
    .my-xl--7 {
        margin-top: -6rem !important;
    }
    .mr-xl--7,
    .mx-xl--7 {
        margin-right: -6rem !important;
    }
    .mb-xl--7,
    .my-xl--7 {
        margin-bottom: -6rem !important;
    }
    .ml-xl--7,
    .mx-xl--7 {
        margin-left: -6rem !important;
    }
    .m-xl--6 {
        margin: -4.5rem !important;
    }
    .mt-xl--6,
    .my-xl--6 {
        margin-top: -4.5rem !important;
    }
    .mr-xl--6,
    .mx-xl--6 {
        margin-right: -4.5rem !important;
    }
    .mb-xl--6,
    .my-xl--6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-xl--6,
    .mx-xl--6 {
        margin-left: -4.5rem !important;
    }
    .m-xl--5 {
        margin: -3rem !important;
    }
    .mt-xl--5,
    .my-xl--5 {
        margin-top: -3rem !important;
    }
    .mr-xl--5,
    .mx-xl--5 {
        margin-right: -3rem !important;
    }
    .mb-xl--5,
    .my-xl--5 {
        margin-bottom: -3rem !important;
    }
    .ml-xl--5,
    .mx-xl--5 {
        margin-left: -3rem !important;
    }
    .m-xl--4 {
        margin: -1.5rem !important;
    }
    .mt-xl--4,
    .my-xl--4 {
        margin-top: -1.5rem !important;
    }
    .mr-xl--4,
    .mx-xl--4 {
        margin-right: -1.5rem !important;
    }
    .mb-xl--4,
    .my-xl--4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-xl--4,
    .mx-xl--4 {
        margin-left: -1.5rem !important;
    }
    .m-xl--3 {
        margin: -1rem !important;
    }
    .mt-xl--3,
    .my-xl--3 {
        margin-top: -1rem !important;
    }
    .mr-xl--3,
    .mx-xl--3 {
        margin-right: -1rem !important;
    }
    .mb-xl--3,
    .my-xl--3 {
        margin-bottom: -1rem !important;
    }
    .ml-xl--3,
    .mx-xl--3 {
        margin-left: -1rem !important;
    }
    .m-xl--2 {
        margin: -0.5rem !important;
    }
    .mt-xl--2,
    .my-xl--2 {
        margin-top: -0.5rem !important;
    }
    .mr-xl--2,
    .mx-xl--2 {
        margin-right: -0.5rem !important;
    }
    .mb-xl--2,
    .my-xl--2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-xl--2,
    .mx-xl--2 {
        margin-left: -0.5rem !important;
    }
    .m-xl--1 {
        margin: -0.25rem !important;
    }
    .mt-xl--1,
    .my-xl--1 {
        margin-top: -0.25rem !important;
    }
    .mr-xl--1,
    .mx-xl--1 {
        margin-right: -0.25rem !important;
    }
    .mb-xl--1,
    .my-xl--1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-xl--1,
    .mx-xl--1 {
        margin-left: -0.25rem !important;
    }
    .m-xl-6 {
        margin: 4.5rem !important;
    }
    .mt-xl-6,
    .my-xl-6 {
        margin-top: 4.5rem !important;
    }
    .mr-xl-6,
    .mx-xl-6 {
        margin-right: 4.5rem !important;
    }
    .mb-xl-6,
    .my-xl-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-xl-6,
    .mx-xl-6 {
        margin-left: 4.5rem !important;
    }
    .m-xl-7 {
        margin: 6rem !important;
    }
    .mt-xl-7,
    .my-xl-7 {
        margin-top: 6rem !important;
    }
    .mr-xl-7,
    .mx-xl-7 {
        margin-right: 6rem !important;
    }
    .mb-xl-7,
    .my-xl-7 {
        margin-bottom: 6rem !important;
    }
    .ml-xl-7,
    .mx-xl-7 {
        margin-left: 6rem !important;
    }
    .m-xl-8 {
        margin: 8rem !important;
    }
    .mt-xl-8,
    .my-xl-8 {
        margin-top: 8rem !important;
    }
    .mr-xl-8,
    .mx-xl-8 {
        margin-right: 8rem !important;
    }
    .mb-xl-8,
    .my-xl-8 {
        margin-bottom: 8rem !important;
    }
    .ml-xl-8,
    .mx-xl-8 {
        margin-left: 8rem !important;
    }
    .m-xl-9 {
        margin: 10rem !important;
    }
    .mt-xl-9,
    .my-xl-9 {
        margin-top: 10rem !important;
    }
    .mr-xl-9,
    .mx-xl-9 {
        margin-right: 10rem !important;
    }
    .mb-xl-9,
    .my-xl-9 {
        margin-bottom: 10rem !important;
    }
    .ml-xl-9,
    .mx-xl-9 {
        margin-left: 10rem !important;
    }
    .p-xl-0 {
        padding: 0 !important;
    }
    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important;
    }
    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important;
    }
    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important;
    }
    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important;
    }
    .p-xl-1 {
        padding: 0.25rem !important;
    }
    .pt-xl-1,
    .py-xl-1 {
        padding-top: 0.25rem !important;
    }
    .pr-xl-1,
    .px-xl-1 {
        padding-right: 0.25rem !important;
    }
    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }
    .pl-xl-1,
    .px-xl-1 {
        padding-left: 0.25rem !important;
    }
    .p-xl-2 {
        padding: 0.5rem !important;
    }
    .pt-xl-2,
    .py-xl-2 {
        padding-top: 0.5rem !important;
    }
    .pr-xl-2,
    .px-xl-2 {
        padding-right: 0.5rem !important;
    }
    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }
    .pl-xl-2,
    .px-xl-2 {
        padding-left: 0.5rem !important;
    }
    .p-xl-3 {
        padding: 1rem !important;
    }
    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem !important;
    }
    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem !important;
    }
    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem !important;
    }
    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem !important;
    }
    .p-xl-4 {
        padding: 1.5rem !important;
    }
    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem !important;
    }
    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem !important;
    }
    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem !important;
    }
    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem !important;
    }
    .p-xl-5 {
        padding: 3rem !important;
    }
    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem !important;
    }
    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem !important;
    }
    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem !important;
    }
    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem !important;
    }
    .p-xl-6 {
        padding: 4.5rem !important;
    }
    .pt-xl-6,
    .py-xl-6 {
        padding-top: 4.5rem !important;
    }
    .pr-xl-6,
    .px-xl-6 {
        padding-right: 4.5rem !important;
    }
    .pb-xl-6,
    .py-xl-6 {
        padding-bottom: 4.5rem !important;
    }
    .pl-xl-6,
    .px-xl-6 {
        padding-left: 4.5rem !important;
    }
    .p-xl-7 {
        padding: 6rem !important;
    }
    .pt-xl-7,
    .py-xl-7 {
        padding-top: 6rem !important;
    }
    .pr-xl-7,
    .px-xl-7 {
        padding-right: 6rem !important;
    }
    .pb-xl-7,
    .py-xl-7 {
        padding-bottom: 6rem !important;
    }
    .pl-xl-7,
    .px-xl-7 {
        padding-left: 6rem !important;
    }
    .p-xl-8 {
        padding: 8rem !important;
    }
    .pt-xl-8,
    .py-xl-8 {
        padding-top: 8rem !important;
    }
    .pr-xl-8,
    .px-xl-8 {
        padding-right: 8rem !important;
    }
    .pb-xl-8,
    .py-xl-8 {
        padding-bottom: 8rem !important;
    }
    .pl-xl-8,
    .px-xl-8 {
        padding-left: 8rem !important;
    }
    .p-xl-9 {
        padding: 10rem !important;
    }
    .pt-xl-9,
    .py-xl-9 {
        padding-top: 10rem !important;
    }
    .pr-xl-9,
    .px-xl-9 {
        padding-right: 10rem !important;
    }
    .pb-xl-9,
    .py-xl-9 {
        padding-bottom: 10rem !important;
    }
    .pl-xl-9,
    .px-xl-9 {
        padding-left: 10rem !important;
    }
    .m-xl-n1 {
        margin: -0.25rem !important;
    }
    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -0.25rem !important;
    }
    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -0.25rem !important;
    }
    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -0.25rem !important;
    }
    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -0.25rem !important;
    }
    .m-xl-n2 {
        margin: -0.5rem !important;
    }
    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -0.5rem !important;
    }
    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -0.5rem !important;
    }
    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -0.5rem !important;
    }
    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -0.5rem !important;
    }
    .m-xl-n3 {
        margin: -1rem !important;
    }
    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -1rem !important;
    }
    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -1rem !important;
    }
    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -1rem !important;
    }
    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -1rem !important;
    }
    .m-xl-n4 {
        margin: -1.5rem !important;
    }
    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -1.5rem !important;
    }
    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -1.5rem !important;
    }
    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -1.5rem !important;
    }
    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -1.5rem !important;
    }
    .m-xl-n5 {
        margin: -3rem !important;
    }
    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -3rem !important;
    }
    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -3rem !important;
    }
    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -3rem !important;
    }
    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -3rem !important;
    }
    .m-xl-n-9 {
        margin: 10rem !important;
    }
    .mt-xl-n-9,
    .my-xl-n-9 {
        margin-top: 10rem !important;
    }
    .mr-xl-n-9,
    .mx-xl-n-9 {
        margin-right: 10rem !important;
    }
    .mb-xl-n-9,
    .my-xl-n-9 {
        margin-bottom: 10rem !important;
    }
    .ml-xl-n-9,
    .mx-xl-n-9 {
        margin-left: 10rem !important;
    }
    .m-xl-n-8 {
        margin: 8rem !important;
    }
    .mt-xl-n-8,
    .my-xl-n-8 {
        margin-top: 8rem !important;
    }
    .mr-xl-n-8,
    .mx-xl-n-8 {
        margin-right: 8rem !important;
    }
    .mb-xl-n-8,
    .my-xl-n-8 {
        margin-bottom: 8rem !important;
    }
    .ml-xl-n-8,
    .mx-xl-n-8 {
        margin-left: 8rem !important;
    }
    .m-xl-n-7 {
        margin: 6rem !important;
    }
    .mt-xl-n-7,
    .my-xl-n-7 {
        margin-top: 6rem !important;
    }
    .mr-xl-n-7,
    .mx-xl-n-7 {
        margin-right: 6rem !important;
    }
    .mb-xl-n-7,
    .my-xl-n-7 {
        margin-bottom: 6rem !important;
    }
    .ml-xl-n-7,
    .mx-xl-n-7 {
        margin-left: 6rem !important;
    }
    .m-xl-n-6 {
        margin: 4.5rem !important;
    }
    .mt-xl-n-6,
    .my-xl-n-6 {
        margin-top: 4.5rem !important;
    }
    .mr-xl-n-6,
    .mx-xl-n-6 {
        margin-right: 4.5rem !important;
    }
    .mb-xl-n-6,
    .my-xl-n-6 {
        margin-bottom: 4.5rem !important;
    }
    .ml-xl-n-6,
    .mx-xl-n-6 {
        margin-left: 4.5rem !important;
    }
    .m-xl-n-5 {
        margin: 3rem !important;
    }
    .mt-xl-n-5,
    .my-xl-n-5 {
        margin-top: 3rem !important;
    }
    .mr-xl-n-5,
    .mx-xl-n-5 {
        margin-right: 3rem !important;
    }
    .mb-xl-n-5,
    .my-xl-n-5 {
        margin-bottom: 3rem !important;
    }
    .ml-xl-n-5,
    .mx-xl-n-5 {
        margin-left: 3rem !important;
    }
    .m-xl-n-4 {
        margin: 1.5rem !important;
    }
    .mt-xl-n-4,
    .my-xl-n-4 {
        margin-top: 1.5rem !important;
    }
    .mr-xl-n-4,
    .mx-xl-n-4 {
        margin-right: 1.5rem !important;
    }
    .mb-xl-n-4,
    .my-xl-n-4 {
        margin-bottom: 1.5rem !important;
    }
    .ml-xl-n-4,
    .mx-xl-n-4 {
        margin-left: 1.5rem !important;
    }
    .m-xl-n-3 {
        margin: 1rem !important;
    }
    .mt-xl-n-3,
    .my-xl-n-3 {
        margin-top: 1rem !important;
    }
    .mr-xl-n-3,
    .mx-xl-n-3 {
        margin-right: 1rem !important;
    }
    .mb-xl-n-3,
    .my-xl-n-3 {
        margin-bottom: 1rem !important;
    }
    .ml-xl-n-3,
    .mx-xl-n-3 {
        margin-left: 1rem !important;
    }
    .m-xl-n-2 {
        margin: 0.5rem !important;
    }
    .mt-xl-n-2,
    .my-xl-n-2 {
        margin-top: 0.5rem !important;
    }
    .mr-xl-n-2,
    .mx-xl-n-2 {
        margin-right: 0.5rem !important;
    }
    .mb-xl-n-2,
    .my-xl-n-2 {
        margin-bottom: 0.5rem !important;
    }
    .ml-xl-n-2,
    .mx-xl-n-2 {
        margin-left: 0.5rem !important;
    }
    .m-xl-n-1 {
        margin: 0.25rem !important;
    }
    .mt-xl-n-1,
    .my-xl-n-1 {
        margin-top: 0.25rem !important;
    }
    .mr-xl-n-1,
    .mx-xl-n-1 {
        margin-right: 0.25rem !important;
    }
    .mb-xl-n-1,
    .my-xl-n-1 {
        margin-bottom: 0.25rem !important;
    }
    .ml-xl-n-1,
    .mx-xl-n-1 {
        margin-left: 0.25rem !important;
    }
    .m-xl-n6 {
        margin: -4.5rem !important;
    }
    .mt-xl-n6,
    .my-xl-n6 {
        margin-top: -4.5rem !important;
    }
    .mr-xl-n6,
    .mx-xl-n6 {
        margin-right: -4.5rem !important;
    }
    .mb-xl-n6,
    .my-xl-n6 {
        margin-bottom: -4.5rem !important;
    }
    .ml-xl-n6,
    .mx-xl-n6 {
        margin-left: -4.5rem !important;
    }
    .m-xl-n7 {
        margin: -6rem !important;
    }
    .mt-xl-n7,
    .my-xl-n7 {
        margin-top: -6rem !important;
    }
    .mr-xl-n7,
    .mx-xl-n7 {
        margin-right: -6rem !important;
    }
    .mb-xl-n7,
    .my-xl-n7 {
        margin-bottom: -6rem !important;
    }
    .ml-xl-n7,
    .mx-xl-n7 {
        margin-left: -6rem !important;
    }
    .m-xl-n8 {
        margin: -8rem !important;
    }
    .mt-xl-n8,
    .my-xl-n8 {
        margin-top: -8rem !important;
    }
    .mr-xl-n8,
    .mx-xl-n8 {
        margin-right: -8rem !important;
    }
    .mb-xl-n8,
    .my-xl-n8 {
        margin-bottom: -8rem !important;
    }
    .ml-xl-n8,
    .mx-xl-n8 {
        margin-left: -8rem !important;
    }
    .m-xl-n9 {
        margin: -10rem !important;
    }
    .mt-xl-n9,
    .my-xl-n9 {
        margin-top: -10rem !important;
    }
    .mr-xl-n9,
    .mx-xl-n9 {
        margin-right: -10rem !important;
    }
    .mb-xl-n9,
    .my-xl-n9 {
        margin-bottom: -10rem !important;
    }
    .ml-xl-n9,
    .mx-xl-n9 {
        margin-left: -10rem !important;
    }
    .m-xl-auto {
        margin: auto !important;
    }
    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important;
    }
    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important;
    }
    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important;
    }
    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important;
    }
}
.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}
.text-justify {
    text-align: justify !important;
}
.text-wrap {
    white-space: normal !important;
}
.text-nowrap {
    white-space: nowrap !important;
}
.text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.text-left {
    text-align: left !important;
}
.text-right {
    text-align: right !important;
}
.text-center {
    text-align: center !important;
}
@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }
    .text-sm-right {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}
@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }
    .text-md-right {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}
@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }
    .text-lg-right {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}
@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }
    .text-xl-right {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}
.text-lowercase {
    text-transform: lowercase !important;
}
.text-uppercase {
    text-transform: uppercase !important;
}
.text-capitalize {
    text-transform: capitalize !important;
}
.font-weight-light {
    font-weight: 300 !important;
}
.font-weight-lighter {
    font-weight: lighter !important;
}
.font-weight-normal {
    font-weight: 400 !important;
}
.font-weight-bold {
    font-weight: 600 !important;
}
.font-weight-bolder {
    font-weight: bolder !important;
}
.font-italic {
    font-style: italic !important;
}
.text-white {
    color: #fff !important;
}
.text-primary {
    color: var(--bs-primary) !important;
}
a.text-primary:focus,
a.text-primary:hover {
    color: #233dd2 !important;
}
.text-secondary {
    color: var(--bs-secondary) !important;
}
a.text-secondary:focus,
a.text-secondary:hover {
    color: #bfd7e7 !important;
}
.text-success {
    color: var(--bs-success) !important;
}
a.text-success:focus,
a.text-success:hover {
    color: #1f8f5f !important;
}
.text-info {
    color: var(--bs-info) !important;
}
a.text-info:focus,
a.text-info:hover {
    color: #0b90a8 !important;
}
.text-warning {
    color: var(--bs-warning) !important;
}
a.text-warning:focus,
a.text-warning:hover {
    color: #ea3005 !important;
}
.text-danger {
    color: var(--bs-danger) !important;
}
a.text-danger:focus,
a.text-danger:hover {
    color: #d40b33 !important;
}
.text-light {
    color: #adb5bd !important;
}
a.text-light:focus,
a.text-light:hover {
    color: #838f9b !important;
}
.text-dark {
    color: var(--bs-dark) !important;
}
a.text-dark:focus,
a.text-dark:hover {
    color: #000 !important;
}
.text-default {
    color: #172b4d !important;
}
a.text-default:focus,
a.text-default:hover {
    color: #050a12 !important;
}
.text-white {
    color: #fff !important;
}
a.text-white:focus,
a.text-white:hover {
    color: #d9d9d9 !important;
}
.text-neutral {
    color: #fff !important;
}
a.text-neutral:focus,
a.text-neutral:hover {
    color: #d9d9d9 !important;
}
.text-darker {
    color: #000 !important;
}
a.text-darker:focus,
a.text-darker:hover {
    color: #000 !important;
}
.text-body {
    color: var(--bs-body-color) !important;
}
.text-muted {
    color: #8898aa !important;
}
.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}
.text-hide {
    font: 0/0 a;
    color: transparent;
    border: 0;
    background-color: transparent;
    text-shadow: none;
}
.text-decoration-none {
    text-decoration: none !important;
}
.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
}
.text-reset {
    color: inherit !important;
}
.visible {
    visibility: visible !important;
}
.invisible {
    visibility: hidden !important;
}
@media print {
    *,
    ::after,
    ::before {
        box-shadow: none !important;
        text-shadow: none !important;
    }
    a:not(.btn) {
        text-decoration: underline;
    }
    abbr[title]::after {
        content: " (" attr(title) ")";
    }
    pre {
        white-space: pre-wrap !important;
    }
    blockquote,
    pre {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }
    thead {
        display: table-header-group;
    }
    img,
    tr {
        page-break-inside: avoid;
    }
    h2,
    h3,
    p {
        orphans: 3;
        widows: 3;
    }
    h2,
    h3 {
        page-break-after: avoid;
    }
    @page {
        size: a3;
    }
    body {
        min-width: 992px !important;
    }
    .container {
        min-width: 992px !important;
    }
    .navbar {
        display: none;
    }
    .badge {
        border: 1px solid #000;
    }
    .table {
        border-collapse: collapse !important;
    }
    .table td,
    .table th {
        background-color: #fff !important;
    }
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6 !important;
    }
    .table-dark {
        color: inherit;
    }
    .table-dark tbody + tbody,
    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #e9ecef;
    }
    .table .thead-dark th {
        color: inherit;
        border-color: #e9ecef;
    }
}
.alert {
    font-size: 0.875rem;
}
.alert-heading {
    font-size: 0.9375rem;
    font-weight: 600;
    margin-top: 0.15rem;
}
.alert-icon {
    font-size: 1.25rem;
    display: inline-block;
    margin-right: 1.25rem;
    vertical-align: middle;
}
.alert-icon i.ni {
    position: relative;
    top: 2px;
}
.alert-text {
    display: inline-block;
    vertical-align: middle;
}
[class*="alert-"] .alert-link {
    color: #fff;
    border-bottom: 1px dotted rgba(255, 255, 255, 0.5);
}
.alert-dismissible .close {
    top: 50%;
    right: 1.5rem;
    padding: 0;
    transform: translateY(-50%);
    opacity: 1;
}
@media (max-width: 575.98px) {
    .alert-dismissible .close {
        top: 1rem;
        right: 0.5rem;
    }
}
.alert-dismissible .close > span:not(.sr-only) {
    font-size: 1.5rem;
    color: rgba(255, 255, 255, 0.6);
    background-color: transparent;
}
.alert-dismissible .close:focus > span:not(.sr-only),
.alert-dismissible .close:hover > span:not(.sr-only) {
    color: #fff;
    background-color: transparent;
}
.alert-secondary .close > span:not(.sr-only) {
    color: rgba(23, 43, 77, 0.6);
}
.alert-secondary .close:focus > span:not(.sr-only),
.alert-secondary .close:hover > span:not(.sr-only) {
    color: #172b4d;
}
.avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: 0.375rem;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}
.avatar img {
    width: 100%;
    border-radius: 0.375rem;
}
.avatar + .avatar-content {
    display: inline-block;
    margin-left: 0.75rem;
}
.avatar-lg {
    font-size: 0.875rem;
    width: 58px;
    height: 58px;
}
.avatar-sm {
    font-size: 0.875rem;
    width: 36px;
    height: 36px;
}

.avatar-xs {
    font-size: 0.875rem;
    width: 30px;
    height: 30px;
}

.avatar-group .avatar {
    position: relative;
    z-index: 2;
    border: 2px solid #fff;
}
.avatar-group .avatar:hover {
    z-index: 3;
}
.avatar-group .avatar + .avatar {
    margin-left: -1rem;
}
.badge {
    text-transform: uppercase;
}
.badge a {
    color: #fff;
}
.badge-md {
    padding: 0.65em 1em;
}
.badge-lg {
    padding: 0.85em 1.375em;
}
.badge-inline {
    margin-right: 0.625rem;
}
.badge-inline + span {
    position: relative;
    top: 2px;
}
.badge-inline + span > a {
    text-decoration: underline;
}
.badge-default {
    color: #fff;
}
.badge-secondary {
    color: var(--bs-dark);
    background-color: var(--bs-secondary);
}
.btn .badge:not(:first-child) {
    margin-left: 0.5rem;
}
.btn .badge:not(:last-child) {
    margin-right: 0.5rem;
}
.badge-circle {
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-flex;
    width: 1.25rem;
    height: 1.25rem;
    padding: 0 !important;
    text-align: center;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
}
.badge-circle.badge-md {
    width: 1.5rem;
    height: 1.5rem;
}
.badge-circle.badge-lg {
    width: 2rem;
    height: 2rem;
}
.badge-dot {
    font-size: 0.875rem;
    font-weight: 400;
    padding-right: 0;
    padding-left: 0;
    text-transform: none;
    background: 0 0;
}
.badge-dot strong {
    color: #32325d;
}
.badge-dot i {
    display: inline-block;
    width: 0.375rem;
    height: 0.375rem;
    margin-right: 0.375rem;
    vertical-align: middle;
    border-radius: 50%;
}
.badge-dot.badge-md i {
    width: 0.5rem;
    height: 0.5rem;
}
.badge-dot.badge-lg i {
    width: 0.625rem;
    height: 0.625rem;
}
.btn {
    font-size: 0.875rem;
    position: relative;
    transition: all 0.15s ease;
    letter-spacing: 0.025em;
    text-transform: none;
    will-change: transform;
}
.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
.btn:not(:last-child) {
    margin-right: 0.5rem;
}
.btn i:not(:first-child),
.btn svg:not(:first-child) {
    margin-left: 0.5rem;
}
.btn i:not(:last-child),
.btn svg:not(:last-child) {
    margin-right: 0.5rem;
}
.btn-group .btn,
.input-group .btn {
    margin-right: 0;
    transform: translateY(0);
}
.btn-group-sm > .btn,
.btn-sm {
    font-size: 0.75rem;
}
.btn-group-lg > .btn,
.btn-lg {
    font-size: 0.875rem;
}
[class*="btn-outline-"] {
    border-width: 1px;
}
.btn-outline-secondary {
    color: #4385b1;
}
.btn-inner--icon i:not(.fas):not(.fab) {
    position: relative;
    top: 2px;
}
.btn-link {
    font-weight: 600;
    box-shadow: none;
}
.btn-link:hover {
    transform: none;
    box-shadow: none;
}
.btn-neutral {
    color: var(--bs-primary);
}
.btn-facebook {
    color: #fff;
    border-color: #3b5999;
    background-color: #3b5999;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-facebook:hover {
    color: #fff;
    border-color: #3b5999;
    background-color: #3b5999;
}
.btn-facebook.focus,
.btn-facebook:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(59, 89, 153, 0.5);
}
.btn-facebook.disabled,
.btn-facebook:disabled {
    color: #fff;
    border-color: #3b5999;
    background-color: #3b5999;
}
.btn-facebook:not(:disabled):not(.disabled).active,
.btn-facebook:not(:disabled):not(.disabled):active,
.show > .btn-facebook.dropdown-toggle {
    color: #fff;
    border-color: #3b5999;
    background-color: #2d4474;
}
.btn-facebook:not(:disabled):not(.disabled).active:focus,
.btn-facebook:not(:disabled):not(.disabled):active:focus,
.show > .btn-facebook.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(59, 89, 153, 0.5);
}
.btn-twitter {
    color: #fff;
    border-color: #1da1f2;
    background-color: #1da1f2;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-twitter:hover {
    color: #fff;
    border-color: #1da1f2;
    background-color: #1da1f2;
}
.btn-twitter.focus,
.btn-twitter:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(29, 161, 242, 0.5);
}
.btn-twitter.disabled,
.btn-twitter:disabled {
    color: #fff;
    border-color: #1da1f2;
    background-color: #1da1f2;
}
.btn-twitter:not(:disabled):not(.disabled).active,
.btn-twitter:not(:disabled):not(.disabled):active,
.show > .btn-twitter.dropdown-toggle {
    color: #fff;
    border-color: #1da1f2;
    background-color: #0c85d0;
}
.btn-twitter:not(:disabled):not(.disabled).active:focus,
.btn-twitter:not(:disabled):not(.disabled):active:focus,
.show > .btn-twitter.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(29, 161, 242, 0.5);
}
.btn-google-plus {
    color: #fff;
    border-color: #dd4b39;
    background-color: #dd4b39;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-google-plus:hover {
    color: #fff;
    border-color: #dd4b39;
    background-color: #dd4b39;
}
.btn-google-plus.focus,
.btn-google-plus:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(221, 75, 57, 0.5);
}
.btn-google-plus.disabled,
.btn-google-plus:disabled {
    color: #fff;
    border-color: #dd4b39;
    background-color: #dd4b39;
}
.btn-google-plus:not(:disabled):not(.disabled).active,
.btn-google-plus:not(:disabled):not(.disabled):active,
.show > .btn-google-plus.dropdown-toggle {
    color: #fff;
    border-color: #dd4b39;
    background-color: #c23321;
}
.btn-google-plus:not(:disabled):not(.disabled).active:focus,
.btn-google-plus:not(:disabled):not(.disabled):active:focus,
.show > .btn-google-plus.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(221, 75, 57, 0.5);
}
.btn-instagram {
    color: #fff;
    border-color: #e4405f;
    background-color: #e4405f;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-instagram:hover {
    color: #fff;
    border-color: #e4405f;
    background-color: #e4405f;
}
.btn-instagram.focus,
.btn-instagram:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(228, 64, 95, 0.5);
}
.btn-instagram.disabled,
.btn-instagram:disabled {
    color: #fff;
    border-color: #e4405f;
    background-color: #e4405f;
}
.btn-instagram:not(:disabled):not(.disabled).active,
.btn-instagram:not(:disabled):not(.disabled):active,
.show > .btn-instagram.dropdown-toggle {
    color: #fff;
    border-color: #e4405f;
    background-color: #d31e40;
}
.btn-instagram:not(:disabled):not(.disabled).active:focus,
.btn-instagram:not(:disabled):not(.disabled):active:focus,
.show > .btn-instagram.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(228, 64, 95, 0.5);
}
.btn-pinterest {
    color: #fff;
    border-color: #bd081c;
    background-color: #bd081c;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-pinterest:hover {
    color: #fff;
    border-color: #bd081c;
    background-color: #bd081c;
}
.btn-pinterest.focus,
.btn-pinterest:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(189, 8, 28, 0.5);
}
.btn-pinterest.disabled,
.btn-pinterest:disabled {
    color: #fff;
    border-color: #bd081c;
    background-color: #bd081c;
}
.btn-pinterest:not(:disabled):not(.disabled).active,
.btn-pinterest:not(:disabled):not(.disabled):active,
.show > .btn-pinterest.dropdown-toggle {
    color: #fff;
    border-color: #bd081c;
    background-color: #8c0615;
}
.btn-pinterest:not(:disabled):not(.disabled).active:focus,
.btn-pinterest:not(:disabled):not(.disabled):active:focus,
.show > .btn-pinterest.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(189, 8, 28, 0.5);
}
.btn-youtube {
    color: #fff;
    border-color: #cd201f;
    background-color: #cd201f;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-youtube:hover {
    color: #fff;
    border-color: #cd201f;
    background-color: #cd201f;
}
.btn-youtube.focus,
.btn-youtube:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(205, 32, 31, 0.5);
}
.btn-youtube.disabled,
.btn-youtube:disabled {
    color: #fff;
    border-color: #cd201f;
    background-color: #cd201f;
}
.btn-youtube:not(:disabled):not(.disabled).active,
.btn-youtube:not(:disabled):not(.disabled):active,
.show > .btn-youtube.dropdown-toggle {
    color: #fff;
    border-color: #cd201f;
    background-color: #a11918;
}
.btn-youtube:not(:disabled):not(.disabled).active:focus,
.btn-youtube:not(:disabled):not(.disabled):active:focus,
.show > .btn-youtube.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(205, 32, 31, 0.5);
}
.btn-slack {
    color: #fff;
    border-color: #3aaf85;
    background-color: #3aaf85;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-slack:hover {
    color: #fff;
    border-color: #3aaf85;
    background-color: #3aaf85;
}
.btn-slack.focus,
.btn-slack:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(58, 175, 133, 0.5);
}
.btn-slack.disabled,
.btn-slack:disabled {
    color: #fff;
    border-color: #3aaf85;
    background-color: #3aaf85;
}
.btn-slack:not(:disabled):not(.disabled).active,
.btn-slack:not(:disabled):not(.disabled):active,
.show > .btn-slack.dropdown-toggle {
    color: #fff;
    border-color: #3aaf85;
    background-color: #2d8968;
}
.btn-slack:not(:disabled):not(.disabled).active:focus,
.btn-slack:not(:disabled):not(.disabled):active:focus,
.show > .btn-slack.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(58, 175, 133, 0.5);
}
.btn-dribbble {
    color: #fff;
    border-color: #ea4c89;
    background-color: #ea4c89;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-dribbble:hover {
    color: #fff;
    border-color: #ea4c89;
    background-color: #ea4c89;
}
.btn-dribbble.focus,
.btn-dribbble:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(234, 76, 137, 0.5);
}
.btn-dribbble.disabled,
.btn-dribbble:disabled {
    color: #fff;
    border-color: #ea4c89;
    background-color: #ea4c89;
}
.btn-dribbble:not(:disabled):not(.disabled).active,
.btn-dribbble:not(:disabled):not(.disabled):active,
.show > .btn-dribbble.dropdown-toggle {
    color: #fff;
    border-color: #ea4c89;
    background-color: #e51e6b;
}
.btn-dribbble:not(:disabled):not(.disabled).active:focus,
.btn-dribbble:not(:disabled):not(.disabled):active:focus,
.show > .btn-dribbble.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(234, 76, 137, 0.5);
}
.btn-github {
    color: #fff;
    border-color: #222;
    background-color: #222;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-github:hover {
    color: #fff;
    border-color: #222;
    background-color: #222;
}
.btn-github.focus,
.btn-github:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(34, 34, 34, 0.5);
}
.btn-github.disabled,
.btn-github:disabled {
    color: #fff;
    border-color: #222;
    background-color: #222;
}
.btn-github:not(:disabled):not(.disabled).active,
.btn-github:not(:disabled):not(.disabled):active,
.show > .btn-github.dropdown-toggle {
    color: #fff;
    border-color: #222;
    background-color: #090909;
}
.btn-github:not(:disabled):not(.disabled).active:focus,
.btn-github:not(:disabled):not(.disabled):active:focus,
.show > .btn-github.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(34, 34, 34, 0.5);
}
.btn-vimeo {
    color: #fff;
    border-color: #04a0f0;
    background-color: #04a0f0;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-vimeo:hover {
    color: #fff;
    border-color: #04a0f0;
    background-color: #04a0f0;
}
.btn-vimeo.focus,
.btn-vimeo:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(4, 160, 240, 0.5);
}
.btn-vimeo.disabled,
.btn-vimeo:disabled {
    color: #fff;
    border-color: #04a0f0;
    background-color: #04a0f0;
}
.btn-vimeo:not(:disabled):not(.disabled).active,
.btn-vimeo:not(:disabled):not(.disabled):active,
.show > .btn-vimeo.dropdown-toggle {
    color: #fff;
    border-color: #04a0f0;
    background-color: #037fbe;
}
.btn-vimeo:not(:disabled):not(.disabled).active:focus,
.btn-vimeo:not(:disabled):not(.disabled):active:focus,
.show > .btn-vimeo.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(4, 160, 240, 0.5);
}
.btn-icon .btn-inner--icon img {
    width: 20px;
}
.btn-icon .btn-inner--text:not(:first-child) {
    margin-left: 0.75em;
}
.btn-icon .btn-inner--text:not(:last-child) {
    margin-right: 0.75em;
}
.btn-icon-only {
    width: 2.375rem;
    height: 2.375rem;
    padding: 0;
}
a.btn-icon-only {
    line-height: 2.5;
}
.btn-group-sm > .btn-icon-only.btn,
.btn-icon-only.btn-sm {
    width: 2rem;
    height: 2rem;
}
.btn-icon-clipboard {
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    display: inline-block;
    width: 100%;
    margin: 0;
    margin: 0.5rem 0;
    padding: 1.5rem;
    cursor: pointer;
    text-align: left;
    vertical-align: middle;
    text-decoration: none;
    color: #32325d;
    border: 0;
    border-radius: 0.375rem;
    background-color: #f6f9fc;
    -moz-appearance: none;
}
.btn-icon-clipboard:hover {
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.1) 0 0 0 1px, rgba(0, 0, 0, 0.1) 0 4px 16px;
}
.btn-icon-clipboard > div {
    display: flex;
    align-items: center;
}
.btn-icon-clipboard i {
    font-size: 1.5rem;
    box-sizing: content-box;
    vertical-align: middle;
    color: var(--bs-primary);
}
.btn-icon-clipboard span {
    font-size: 0.875rem;
    line-height: 1.5;
    display: inline-block;
    overflow: hidden;
    margin-left: 16px;
    vertical-align: middle;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.card {
    margin-bottom: 30px;
    border: 0;
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
}
.card-translucent {
    background-color: rgba(18, 91, 152, 0.08);
}
.card-deck .card {
    margin-bottom: 30px;
}
.card.shadow {
    border: 0 !important;
}
@media (min-width: 576px) {
    .card-columns {
        column-count: 1;
    }
}
@media (min-width: 768px) {
    .card-columns {
        column-count: 2;
    }
}
@media (min-width: 1200px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
    }
}
.card-lift--hover:hover {
    transition: all 0.15s ease;
    transform: translateY(-20px);
}
@media (prefers-reduced-motion: reduce) {
    .card-lift--hover:hover {
        transition: none;
    }
}
.card-blockquote {
    position: relative;
    padding: 2rem;
}
.card-blockquote .svg-bg {
    position: absolute;
    top: -94px;
    left: 0;
    display: block;
    width: 100%;
    height: 95px;
}
.card-profile-image {
    position: relative;
}
.card-profile-image img {
    position: absolute;
    left: 50%;
    max-width: 140px;
    transition: all 0.15s ease;
    transform: translate(-50%, -50%) scale(1);
    border: 3px solid #fff;
    border-radius: 0.375rem;
}
.card-profile-image img:hover {
    transform: translate(-50%, -50%) scale(1.03);
}
.card-profile-stats {
    padding: 1rem 0;
}
.card-profile-stats > div {
    margin-right: 1rem;
    padding: 0.875rem;
    text-align: center;
}
.card-profile-stats > div:last-child {
    margin-right: 0;
}
.card-profile-stats > div .heading {
    font-size: 1.1rem;
    font-weight: 700;
    display: block;
}
.card-profile-stats > div .description {
    font-size: 0.875rem;
    color: #adb5bd;
}
.card-profile-actions {
    padding: 0.875rem;
}
.card-stats .card-body {
    padding: 1rem 1.5rem;
}
.card-stats .card-status-bullet {
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(50%, -50%);
}
.chart {
    position: relative;
    height: 350px;
}
.chart-sm {
    height: 230px;
}
.chart-legend {
    font-size: 0.875rem;
    display: flex;
    margin-top: 2.5rem;
    text-align: center;
    color: #8898aa;
    justify-content: center;
}
.chart-legend-item {
    display: inline-flex;
    align-items: center;
}
.chart-legend-item + .chart-legend-item {
    margin-left: 1rem;
}
.chart-legend-indicator {
    display: inline-block;
    width: 0.5rem;
    height: 0.5rem;
    margin-right: 0.375rem;
    border-radius: 50%;
}
#chart-tooltip {
    z-index: 0;
}
#chart-tooltip .arrow {
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateX(-0.5rem);
}
.chart-info-overlay {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 5%;
    max-width: 350px;
    padding: 20px;
}
.close {
    transition: all 0.15s ease;
}
.close > span:not(.sr-only) {
    font-size: 1.25rem;
    line-height: 17px;
    display: block;
    width: 1.25rem;
    height: 1.25rem;
    transition: all 0.15s ease;
    color: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    background-color: transparent;
}
.close:focus,
.close:hover {
    color: rgba(0, 0, 0, 0.9);
    outline: 0;
    background-color: transparent;
}
.close:focus span:not(.sr-only),
.close:hover span:not(.sr-only) {
    background-color: transparent;
}
.accordion .card-header {
    position: relative;
    cursor: pointer;
}
.accordion .card-header:after {
    font: normal normal normal 14px/1 NucleoIcons;
    line-height: 0;
    position: absolute;
    top: 50%;
    right: 1.5rem;
    content: "\ea0f";
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-50%);
}
@media (prefers-reduced-motion: reduce) {
    .accordion .card-header:after {
        transition: none;
    }
}
.accordion .card-header[aria-expanded="false"]:after {
    content: "\ea0f";
}
.accordion .card-header[aria-expanded="true"]:after {
    transform: rotate(180deg);
}
.accordion .card-header[aria-expanded="true"] .heading {
    color: var(--bs-primary);
}
.main-content {
    position: relative;
}
.main-content .navbar-top {
    padding-right: 0 !important;
    padding-left: 0 !important;
}
@media (min-width: 768px) {
    .main-content .container-fluid,
    .main-content .container-lg,
    .main-content .container-md,
    .main-content .container-sm,
    .main-content .container-xl {
        padding-right: 30px !important;
        padding-left: 30px !important;
    }
}
.custom-checkbox .custom-control-input ~ .custom-control-label {
    font-size: 0.875rem;
    cursor: pointer;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-primary);
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'><path fill='#fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/></svg>");
}
.custom-checkbox .custom-control-input:disabled ~ .custom-control-label::before {
    border-color: #e9ecef;
}
.custom-checkbox .custom-control-input:disabled:checked::before {
    border-color: rgba(94, 114, 228, 0.5);
}
.custom-control-label::before {
    top: 0.25rem;
    left: -1.75rem;
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border: 1px solid #dee2e6;
}
@media (prefers-reduced-motion: reduce) {
    .custom-control-label::before {
        transition: none;
    }
}
.custom-control-label::after {
    top: 0.25rem;
    left: -1.75rem;
}
.custom-control-label span {
    position: relative;
    top: 2px;
}
.custom-control-label {
    margin-bottom: 0;
}
.custom-control-alternative .custom-control-label::before {
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
}
.custom-control-alternative .custom-control-input:checked ~ .custom-control-label::before {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.custom-control-alternative .custom-control-input:active ~ .custom-control-label::before,
.custom-control-alternative .custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
}
.custom-checkbox .custom-control-input ~ .custom-control-label {
    font-size: 0.875rem;
    height: 1rem;
    cursor: pointer;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-primary);
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'><path fill='#fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/></svg>");
}
.custom-checkbox .custom-control-input:disabled ~ .custom-control-label::before {
    border-color: #e9ecef;
}
.custom-checkbox .custom-control-input:disabled:checked::before {
    border-color: rgba(94, 114, 228, 0.5);
}
.custom-checkbox-primary .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.custom-checkbox-primary .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-primary);
}
.custom-checkbox-secondary .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-secondary);
    background-color: var(--bs-secondary);
}
.custom-checkbox-secondary .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-secondary);
}
.custom-checkbox-success .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-success);
    background-color: var(--bs-success);
}
.custom-checkbox-success .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-success);
}
.custom-checkbox-info .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-info);
    background-color: var(--bs-info);
}
.custom-checkbox-info .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-info);
}
.custom-checkbox-warning .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-warning);
    background-color: var(--bs-warning);
}
.custom-checkbox-warning .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-warning);
}
.custom-checkbox-danger .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-danger);
    background-color: var(--bs-danger);
}
.custom-checkbox-danger .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-danger);
}
.custom-checkbox-light .custom-control-input:checked ~ .custom-control-label::before {
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.custom-checkbox-light .custom-control-input:checked ~ .custom-control-label::after {
    background-image: #adb5bd;
}
.custom-checkbox-dark .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-dark);
    background-color: var(--bs-dark);
}
.custom-checkbox-dark .custom-control-input:checked ~ .custom-control-label::after {
    background-image: var(--bs-dark);
}
.custom-checkbox-default .custom-control-input:checked ~ .custom-control-label::before {
    border-color: #172b4d;
    background-color: #172b4d;
}
.custom-checkbox-default .custom-control-input:checked ~ .custom-control-label::after {
    background-image: #172b4d;
}
.custom-checkbox-white .custom-control-input:checked ~ .custom-control-label::before {
    border-color: #fff;
    background-color: #fff;
}
.custom-checkbox-white .custom-control-input:checked ~ .custom-control-label::after {
    background-image: #fff;
}
.custom-checkbox-neutral .custom-control-input:checked ~ .custom-control-label::before {
    border-color: #fff;
    background-color: #fff;
}
.custom-checkbox-neutral .custom-control-input:checked ~ .custom-control-label::after {
    background-image: #fff;
}
.custom-checkbox-darker .custom-control-input:checked ~ .custom-control-label::before {
    border-color: #000;
    background-color: #000;
}
.custom-checkbox-darker .custom-control-input:checked ~ .custom-control-label::after {
    background-image: #000;
}
.custom-radio .custom-control-input ~ .custom-control-label {
    font-size: 0.875rem;
    height: 1rem;
    cursor: pointer;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
    border-color: var(--bs-primary);
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'><circle r='3' fill='#fff'/></svg>");
}
.custom-radio .custom-control-input:disabled ~ .custom-control-label::before {
    border-color: #e9ecef;
}
.custom-radio .custom-control-input:disabled:checked::before {
    border-color: rgba(94, 114, 228, 0.5);
}
.custom-toggle {
    position: relative;
    display: inherit;
    display: inline-block;
    width: 52px;
    height: 1.5rem;
    margin: 0;
}
.custom-toggle input {
    display: none;
}
.custom-toggle input:checked + .custom-toggle-slider {
    border: 1px solid var(--bs-primary);
}
.custom-toggle input:checked + .custom-toggle-slider:before {
    transform: translateX(28px);
    background: var(--bs-primary);
}
.custom-toggle input:disabled + .custom-toggle-slider {
    border: 1px solid #e9ecef;
}
.custom-toggle input:disabled:checked + .custom-toggle-slider {
    border: 1px solid #e9ecef;
}
.custom-toggle input:disabled:checked + .custom-toggle-slider:before {
    background-color: #8a98eb;
}
.custom-toggle-slider {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    cursor: pointer;
    border: 1px solid #ced4da;
    border-radius: 34px !important;
    background-color: transparent;
}
.custom-toggle-slider:before {
    position: absolute;
    bottom: 2px;
    left: 2px;
    width: 18px;
    height: 18px;
    content: "";
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border-radius: 50% !important;
    background-color: #e9ecef;
}
.custom-toggle-wrapper .custom-toggle + .custom-toggle {
    margin-left: 1rem !important;
}
.custom-toggle input:checked + .custom-toggle-slider:after {
    right: auto;
    left: 0;
    content: attr(data-label-on);
    color: var(--bs-primary);
}
.custom-toggle-slider:after {
    font-family: inherit;
    font-size: 0.75rem;
    font-weight: 600;
    line-height: 24px;
    position: absolute;
    top: 0;
    right: 0;
    display: block;
    overflow: hidden;
    min-width: 1.66667rem;
    margin: 0 0.21667rem;
    content: attr(data-label-off);
    transition: all 0.15s ease;
    text-align: center;
    color: #ced4da;
}
@media (prefers-reduced-motion: reduce) {
    .custom-toggle-slider:after {
        transition: none;
    }
}
.custom-toggle-primary input:checked + .custom-toggle-slider {
    border-color: var(--bs-primary);
}
.custom-toggle-primary input:checked + .custom-toggle-slider:before {
    background: var(--bs-primary);
}
.custom-toggle-primary input:checked + .custom-toggle-slider:after {
    color: var(--bs-primary);
}
.custom-toggle-primary input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-primary);
}
.custom-toggle-primary input:disabled:checked + .custom-toggle-slider:before {
    background-color: #8a98eb;
}
.custom-toggle-secondary input:checked + .custom-toggle-slider {
    border-color: var(--bs-secondary);
}
.custom-toggle-secondary input:checked + .custom-toggle-slider:before {
    background: var(--bs-secondary);
}
.custom-toggle-secondary input:checked + .custom-toggle-slider:after {
    color: var(--bs-secondary);
}
.custom-toggle-secondary input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-secondary);
}
.custom-toggle-secondary input:disabled:checked + .custom-toggle-slider:before {
    background-color: #fff;
}
.custom-toggle-success input:checked + .custom-toggle-slider {
    border-color: var(--bs-success);
}
.custom-toggle-success input:checked + .custom-toggle-slider:before {
    background: var(--bs-success);
}
.custom-toggle-success input:checked + .custom-toggle-slider:after {
    color: var(--bs-success);
}
.custom-toggle-success input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-success);
}
.custom-toggle-success input:disabled:checked + .custom-toggle-slider:before {
    background-color: #54daa1;
}
.custom-toggle-info input:checked + .custom-toggle-slider {
    border-color: var(--bs-info);
}
.custom-toggle-info input:checked + .custom-toggle-slider:before {
    background: var(--bs-info);
}
.custom-toggle-info input:checked + .custom-toggle-slider:after {
    color: var(--bs-info);
}
.custom-toggle-info input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-info);
}
.custom-toggle-info input:disabled:checked + .custom-toggle-slider:before {
    background-color: #41d7f2;
}
.custom-toggle-warning input:checked + .custom-toggle-slider {
    border-color: var(--bs-warning);
}
.custom-toggle-warning input:checked + .custom-toggle-slider:before {
    background: var(--bs-warning);
}
.custom-toggle-warning input:checked + .custom-toggle-slider:after {
    color: var(--bs-warning);
}
.custom-toggle-warning input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-warning);
}
.custom-toggle-warning input:disabled:checked + .custom-toggle-slider:before {
    background-color: #fc8c72;
}
.custom-toggle-danger input:checked + .custom-toggle-slider {
    border-color: var(--bs-danger);
}
.custom-toggle-danger input:checked + .custom-toggle-slider:before {
    background: var(--bs-danger);
}
.custom-toggle-danger input:checked + .custom-toggle-slider:after {
    color: var(--bs-danger);
}
.custom-toggle-danger input:disabled:checked + .custom-toggle-slider {
    border-color: var(--bs-danger);
}
.custom-toggle-danger input:disabled:checked + .custom-toggle-slider:before {
    background-color: #f76783;
}
.custom-toggle-light input:checked + .custom-toggle-slider {
    border-color: #adb5bd;
}
.custom-toggle-light input:checked + .custom-toggle-slider:before {
    background: #adb5bd;
}
.custom-toggle-light input:checked + .custom-toggle-slider:after {
    color: #adb5bd;
}
.custom-toggle-light input:disabled:checked + .custom-toggle-slider {
    border-color: #adb5bd;
}
.custom-toggle-light input:disabled:checked + .custom-toggle-slider:before {
    background-color: #c9cfd4;
}
.custom-toggle-dark input:checked + .custom-toggle-slider {
    border-color: #212529;
}
.custom-toggle-dark input:checked + .custom-toggle-slider:before {
    background: #212529;
}
.custom-toggle-dark input:checked + .custom-toggle-slider:after {
    color: #212529;
}
.custom-toggle-dark input:disabled:checked + .custom-toggle-slider {
    border-color: #212529;
}
.custom-toggle-dark input:disabled:checked + .custom-toggle-slider:before {
    background-color: #383f45;
}
.custom-toggle-default input:checked + .custom-toggle-slider {
    border-color: #172b4d;
}
.custom-toggle-default input:checked + .custom-toggle-slider:before {
    background: #172b4d;
}
.custom-toggle-default input:checked + .custom-toggle-slider:after {
    color: #172b4d;
}
.custom-toggle-default input:disabled:checked + .custom-toggle-slider {
    border-color: #172b4d;
}
.custom-toggle-default input:disabled:checked + .custom-toggle-slider:before {
    background-color: #234174;
}
.custom-toggle-white input:checked + .custom-toggle-slider {
    border-color: #fff;
}
.custom-toggle-white input:checked + .custom-toggle-slider:before {
    background: #fff;
}
.custom-toggle-white input:checked + .custom-toggle-slider:after {
    color: #fff;
}
.custom-toggle-white input:disabled:checked + .custom-toggle-slider {
    border-color: #fff;
}
.custom-toggle-white input:disabled:checked + .custom-toggle-slider:before {
    background-color: #fff;
}
.custom-toggle-neutral input:checked + .custom-toggle-slider {
    border-color: #fff;
}
.custom-toggle-neutral input:checked + .custom-toggle-slider:before {
    background: #fff;
}
.custom-toggle-neutral input:checked + .custom-toggle-slider:after {
    color: #fff;
}
.custom-toggle-neutral input:disabled:checked + .custom-toggle-slider {
    border-color: #fff;
}
.custom-toggle-neutral input:disabled:checked + .custom-toggle-slider:before {
    background-color: #fff;
}
.custom-toggle-darker input:checked + .custom-toggle-slider {
    border-color: #000;
}
.custom-toggle-darker input:checked + .custom-toggle-slider:before {
    background: #000;
}
.custom-toggle-darker input:checked + .custom-toggle-slider:after {
    color: #000;
}
.custom-toggle-darker input:disabled:checked + .custom-toggle-slider {
    border-color: #000;
}
.custom-toggle-darker input:disabled:checked + .custom-toggle-slider:before {
    background-color: #1a1a1a;
}
.dropdown,
.dropleft,
.dropright,
.dropup {
    display: inline-block;
}
.dropdown-menu {
    min-width: 12rem;
}
.dropdown-menu .dropdown-item {
    font-size: 0.875rem;
    padding: 0.5rem 1rem;
}
.dropdown-menu .dropdown-item > i,
.dropdown-menu .dropdown-item > svg {
    font-size: 1rem;
    margin-right: 1rem;
    vertical-align: -17%;
}
.dropdown-header {
    font-size: 0.625rem;
    font-weight: 700;
    padding-right: 1rem;
    padding-left: 1rem;
    text-transform: uppercase;
}
.dropdown-menu a.media > div:first-child {
    line-height: 1;
}
.dropdown-menu a.media p {
    color: #8898aa;
}
.dropdown-menu a.media:hover .heading,
.dropdown-menu a.media:hover p {
    color: #172b4d !important;
}
.dropdown-menu-sm {
    min-width: 100px;
    border: 0.4375rem;
}
.dropdown-menu-lg {
    min-width: 320px;
    border-radius: 0.4375rem;
}
.dropdown-menu-xl {
    min-width: 420px;
    border-radius: 0.4375rem;
}
.footer {
    padding: 30px 0;
    background: #f8f9fe;
}
.footer .col-footer .heading {
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 1rem;
    letter-spacing: 0;
    text-transform: uppercase;
    color: #8898aa;
}
.footer .footer-link,
.footer .nav .nav-item .nav-link {
    color: #8898aa !important;
}
.footer .footer-link:hover,
.footer .nav .nav-item .nav-link:hover {
    color: var(--bs-body-color) !important;
}
.footer .list-unstyled li a {
    font-size: 0.85rem;
    display: inline-block;
    padding: 0.125rem 0;
    color: #8898aa;
}
.footer .list-unstyled li a:hover {
    color: var(--bs-body-color);
}
.footer .copyright {
    font-size: 0.875rem;
}
.footer-dark .col-footer .heading {
    color: #fff;
}
.nav-footer .nav-link {
    font-size: 0.875rem;
}
.nav-footer .nav-item:last-child .nav-link {
    padding-right: 0;
}
.footer.has-cards {
    position: relative;
    overflow: hidden;
    margin-top: -420px;
    padding-top: 500px;
    pointer-events: none;
    background: 0 0;
}
.footer.has-cards:before {
    position: absolute;
    top: 600px;
    right: 0;
    left: 0;
    height: 2000px;
    content: "";
    transform: skew(0, -8deg);
    background: var(--bs-secondary);
}
.footer.has-cards .container {
    position: relative;
    pointer-events: auto;
}
.footer-auto-bottom {
    position: absolute;
    bottom: 0;
    width: 100%;
}
.form-control-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--bs-body-color);
}
.form-control {
    font-size: 0.875rem;
    height: calc(1.5em + 1.25rem + 5px);
    transition: all 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}
.form-control:focus::-ms-input-placeholder {
    color: #adb5bd;
}
.form-control:focus::placeholder {
    color: #adb5bd;
}
.form-control-lg {
    height: calc(2.25em + 1.25rem + 5px);
}
.form-control-sm {
    height: calc(0.45em + 1.25rem + 5px);
}
.form-control-flush {
    padding: 0;
    border-width: 0;
    background-color: transparent;
    box-shadow: none;
}
.form-control-flush:focus {
    border-width: 0;
    background-color: transparent;
    box-shadow: none;
}
textarea[resize="none"] {
    resize: none !important;
}
textarea[resize="both"] {
    resize: both !important;
}
textarea[resize="vertical"] {
    resize: vertical !important;
}
textarea[resize="horizontal"] {
    resize: horizontal !important;
}
.form-control-muted {
    border-color: #f7fafe;
    background-color: #f7fafe;
    box-shadow: none;
}
.form-control-muted:focus {
    background-color: #fcfdff;
}
.form-control-alternative {
    transition: box-shadow 0.15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
}
.form-control-alternative:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.form-control-lg,
.input-group-lg .form-control,
.input-group-text {
    font-size: 1rem !important;
}
.custom-control {
    padding-left: 1.75rem;
}
.input-group {
    transition: all 0.15s ease-in-out;
    border-radius: 0.25rem;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
@media (prefers-reduced-motion: reduce) {
    .input-group {
        transition: none;
    }
}
.input-group .form-control {
    box-shadow: none;
}
.input-group .form-control:focus {
    box-shadow: none;
}
.input-group-text {
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
@media (prefers-reduced-motion: reduce) {
    .input-group-text {
        transition: none;
    }
}
.input-group-text i {
    font-size: 0.875rem;
}
.input-group-text .custom-control {
    line-height: 1;
}
.input-group-prepend .input-group-text {
    border-right: 0;
}
.input-group-append .input-group-text {
    border-left: 0;
}
.input-group-merge .form-control:not(:first-child) {
    padding-left: 0;
    border-left: 0;
}
.input-group-merge .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
}
.input-group-alternative {
    transition: box-shadow 0.15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
}
.input-group-alternative .form-control,
.input-group-alternative .input-group-text {
    border: 0;
    box-shadow: none;
}
.focused .input-group-alternative {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08) !important;
}
.input-group-flush {
    box-shadow: none;
}
.input-group-flush > .form-control {
    padding: 0;
    border-width: 0;
    background-color: transparent;
}
.input-group-flush > .input-group-append > .input-group-text,
.input-group-flush > .input-group-prepend > .input-group-text {
    padding: 0;
    padding-right: 1rem;
    border-width: 0;
    background-color: transparent;
}
.focused .input-group {
    box-shadow: 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.focused .input-group-text {
    color: #8898aa;
    border-color: var(--bs-primary);
    background-color: #fff;
}
.focused .form-control {
    border-color: var(--bs-primary);
}
.focused .input-group-flush {
    box-shadow: none;
}
.has-danger,
.has-success {
    position: relative;
}
.has-danger:after,
.has-success:after {
    font-family: NucleoIcons;
    font-size: 9px;
    line-height: 19px;
    position: absolute;
    top: 50%;
    right: 15px;
    display: none;
    width: 19px;
    height: 19px;
    transform: translateY(-50%);
    text-align: center;
    opacity: 1;
    border-radius: 50%;
}
.has-danger .input-group-prepend .input-group-text,
.has-success .input-group-prepend .input-group-text {
    border-color: red;
}
.has-success:after {
    content: "\ea26";
    color: #1d8357;
    background-color: #69deac;
}
.has-success .form-control {
    background-color: #fff;
}
.has-success .form-control::-ms-input-placeholder {
    color: var(--bs-success);
}
.has-success .form-control::placeholder {
    color: var(--bs-success);
}
.has-danger:after {
    content: "\ea53";
    color: #db2d05;
    background-color: #fda08b;
}
.has-danger .form-control {
    background-color: #fff;
}
.has-danger .form-control::-ms-input-placeholder {
    color: var(--bs-warning);
}
.has-danger .form-control::placeholder {
    color: var(--bs-warning);
}
.row-example > .col span,
.row-example > [class^="col-"] span {
    font-size: 0.875rem;
    display: block;
    margin: 1rem 0;
    padding: 0.75rem;
    color: #393f49;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.1) 0 0 0 1px, rgba(0, 0, 0, 0.1) 0 4px 16px;
}
.no-gutters > .col span,
.no-gutters > [class^="col-"] span {
    border-radius: 0;
}
.header {
    position: relative;
}
.icon {
    width: 3rem;
    height: 3rem;
}
.icon i,
.icon svg {
    font-size: 2.25rem;
}
.icon + .icon-text {
    width: calc(100% - 3rem - 1);
    padding-left: 1rem;
}
.icon-xl {
    width: 5rem;
    height: 5rem;
}
.icon-xl i,
.icon-xl svg {
    font-size: 4.25rem;
}
.icon-xl + .icon-text {
    width: calc(100% - 5rem - 1);
}
.icon-lg {
    width: 4rem;
    height: 4rem;
}
.icon-lg i,
.icon-lg svg {
    font-size: 3.25rem;
}
.icon-lg + .icon-text {
    width: calc(100% - $icon-size-lg - 1);
}
.icon-sm {
    width: 2rem;
    height: 2rem;
}
.icon-sm i,
.icon-sm svg {
    font-size: 1.25rem;
}
.icon-sm + .icon-text {
    width: calc(100% - $icon-size-sm - 1);
}
.icon-xs {
    width: 1.25rem;
    height: 1.25rem;
}
.icon-xs i,
.icon-xs svg {
    font-size: 0.5rem;
}
.icon-xs + .icon-text {
    width: calc(100% - $icon-size-xs - 1);
}
.icon-shape {
    display: inline-flex;
    padding: 12px;
    text-align: center;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
}
.icon-shape i,
.icon-shape svg {
    font-size: 1.25rem;
}
.icon-shape.icon-lg i,
.icon-shape.icon-lg svg {
    font-size: 1.625rem;
}
.icon-shape.icon-sm i,
.icon-shape.icon-sm svg {
    font-size: 0.875rem;
}
.icon-shape.icon-xs i,
.icon-shape.icon-xs svg {
    font-size: 0.6rem;
}
.icon-shape svg {
    width: 30px;
    height: 30px;
}
.icon-shape-primary {
    color: #2643e9;
    background-color: rgba(138, 152, 235, 0.5);
}
.icon-shape-secondary {
    color: #cfe3f1;
    background-color: rgba(255, 255, 255, 0.5);
}
.icon-shape-success {
    color: #1aae6f;
    background-color: rgba(84, 218, 161, 0.5);
}
.icon-shape-info {
    color: #03acca;
    background-color: rgba(65, 215, 242, 0.5);
}
.icon-shape-warning {
    color: #ff3709;
    background-color: rgba(252, 140, 114, 0.5);
}
.icon-shape-danger {
    color: #f80031;
    background-color: rgba(247, 103, 131, 0.5);
}
.icon-shape-light {
    color: #879cb0;
    background-color: rgba(201, 207, 212, 0.5);
}
.icon-shape-dark {
    color: #090c0e;
    background-color: rgba(56, 63, 69, 0.5);
}
.icon-shape-default {
    color: #091428;
    background-color: rgba(35, 65, 116, 0.5);
}
.icon-shape-white {
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, 0.5);
}
.icon-shape-neutral {
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, 0.5);
}
.icon-shape-darker {
    color: #000;
    background-color: rgba(26, 26, 26, 0.5);
}
.list-group-space .list-group-item {
    margin-bottom: 1.5rem;
    border-radius: 0.375rem;
}
.list-group-img {
    width: 3rem;
    height: 3rem;
    margin: -0.1rem 1.2rem 0 -0.2rem;
    vertical-align: top;
    border-radius: 50%;
}
.list-group-content {
    min-width: 0;
    flex: 1 1;
}
.list-group-content > p {
    line-height: 1.5;
    margin: 0.2rem 0 0;
    color: #adb5bd;
}
.list-group-heading {
    font-size: 1rem;
    color: #32325d;
}
.list-group-heading > small {
    font-weight: 500;
    float: right;
    color: #adb5bd;
}
.map-canvas {
    position: relative;
    width: 100%;
    height: 500px;
    border-radius: 0.375rem;
}
.mask {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .mask {
        transition: none;
    }
}
.modal-title {
    font-size: 1.0625rem;
}
.modal-fluid .modal-dialog {
    margin-top: 0;
    margin-bottom: 0;
}
.modal-fluid .modal-content {
    border-radius: 0;
}
.modal-primary .modal-title {
    color: #fff;
}
.modal-primary .modal-footer,
.modal-primary .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-primary .modal-content {
    color: #fff;
    background-color: var(--bs-primary);
}
.modal-primary .modal-content .heading {
    color: #fff;
}
.modal-primary .close > span:not(.sr-only) {
    color: #fff;
}
.modal-secondary .modal-title {
    color: var(--bs-dark);
}
.modal-secondary .modal-footer,
.modal-secondary .modal-header {
    border-color: rgba(33, 37, 41, 0.075);
}
.modal-secondary .modal-content {
    color: var(--bs-dark);
    background-color: var(--bs-secondary);
}
.modal-secondary .modal-content .heading {
    color: var(--bs-dark);
}
.modal-secondary .close > span:not(.sr-only) {
    color: #fff;
}
.modal-success .modal-title {
    color: #fff;
}
.modal-success .modal-footer,
.modal-success .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-success .modal-content {
    color: #fff;
    background-color: var(--bs-success);
}
.modal-success .modal-content .heading {
    color: #fff;
}
.modal-success .close > span:not(.sr-only) {
    color: #fff;
}
.modal-info .modal-title {
    color: #fff;
}
.modal-info .modal-footer,
.modal-info .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-info .modal-content {
    color: #fff;
    background-color: var(--bs-info);
}
.modal-info .modal-content .heading {
    color: #fff;
}
.modal-info .close > span:not(.sr-only) {
    color: #fff;
}
.modal-warning .modal-title {
    color: #fff;
}
.modal-warning .modal-footer,
.modal-warning .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-warning .modal-content {
    color: #fff;
    background-color: var(--bs-warning);
}
.modal-warning .modal-content .heading {
    color: #fff;
}
.modal-warning .close > span:not(.sr-only) {
    color: #fff;
}
.modal-danger .modal-title {
    color: #fff;
}
.modal-danger .modal-footer,
.modal-danger .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-danger .modal-content {
    color: #fff;
    background-color: var(--bs-danger);
}
.modal-danger .modal-content .heading {
    color: #fff;
}
.modal-danger .close > span:not(.sr-only) {
    color: #fff;
}
.modal-light .modal-title {
    color: #fff;
}
.modal-light .modal-footer,
.modal-light .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-light .modal-content {
    color: #fff;
    background-color: #adb5bd;
}
.modal-light .modal-content .heading {
    color: #fff;
}
.modal-light .close > span:not(.sr-only) {
    color: #fff;
}
.modal-dark .modal-title {
    color: #fff;
}
.modal-dark .modal-footer,
.modal-dark .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-dark .modal-content {
    color: #fff;
    background-color: var(--bs-dark);
}
.modal-dark .modal-content .heading {
    color: #fff;
}
.modal-dark .close > span:not(.sr-only) {
    color: #fff;
}
.modal-default .modal-title {
    color: #fff;
}
.modal-default .modal-footer,
.modal-default .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-default .modal-content {
    color: #fff;
    background-color: #172b4d;
}
.modal-default .modal-content .heading {
    color: #fff;
}
.modal-default .close > span:not(.sr-only) {
    color: #fff;
}
.modal-white .modal-title {
    color: var(--bs-dark);
}
.modal-white .modal-footer,
.modal-white .modal-header {
    border-color: rgba(33, 37, 41, 0.075);
}
.modal-white .modal-content {
    color: var(--bs-dark);
    background-color: #fff;
}
.modal-white .modal-content .heading {
    color: var(--bs-dark);
}
.modal-white .close > span:not(.sr-only) {
    color: #fff;
}
.modal-neutral .modal-title {
    color: var(--bs-dark);
}
.modal-neutral .modal-footer,
.modal-neutral .modal-header {
    border-color: rgba(33, 37, 41, 0.075);
}
.modal-neutral .modal-content {
    color: var(--bs-dark);
    background-color: #fff;
}
.modal-neutral .modal-content .heading {
    color: var(--bs-dark);
}
.modal-neutral .close > span:not(.sr-only) {
    color: #fff;
}
.modal-darker .modal-title {
    color: #fff;
}
.modal-darker .modal-footer,
.modal-darker .modal-header {
    border-color: rgba(255, 255, 255, 0.075);
}
.modal-darker .modal-content {
    color: #fff;
    background-color: #000;
}
.modal-darker .modal-content .heading {
    color: #fff;
}
.modal-darker .close > span:not(.sr-only) {
    color: #fff;
}
.navbar-horizontal .navbar-nav .nav-link {
    font-size: 0.875rem;
    font-weight: 500;
    letter-spacing: 0;
    text-transform: normal;
}
.navbar-horizontal .navbar-nav .nav-link .nav-link-inner--text {
    margin-left: 0.25rem;
}
.navbar-horizontal .navbar-brand {
    font-size: 0.875rem;
    font-size: 0.875rem;
    font-weight: 600;
    letter-spacing: 0.05px;
    text-transform: uppercase;
}
.navbar-horizontal .navbar-brand img {
    height: 30px;
}
.navbar-horizontal .navbar-dark .navbar-brand {
    color: #fff;
}
.navbar-horizontal .navbar-light .navbar-brand {
    color: #32325d;
}
.navbar-horizontal .navbar-nav .nav-item .media:not(:last-child) {
    margin-bottom: 1.5rem;
}
@media (min-width: 992px) {
    .navbar-horizontal .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
    .navbar-horizontal .navbar-nav .nav-item [data-toggle="dropdown"]::after {
        transition: all 0.15s ease;
    }
    .navbar-horizontal .navbar-nav .nav-item.show [data-toggle="dropdown"]::after {
        transform: rotate(180deg);
    }
    .navbar-horizontal .navbar-nav .nav-link {
        padding-top: 1rem;
        padding-bottom: 1rem;
        border-radius: 0.375rem;
    }
    .navbar-horizontal .navbar-nav .nav-link i {
        margin-right: 0.625rem;
    }
    .navbar-horizontal .navbar-nav .nav-link-icon {
        font-size: 1rem;
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
        border-radius: 0.375rem;
    }
    .navbar-horizontal .navbar-nav .nav-link-icon i {
        margin-right: 0;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu {
        margin: 0;
        pointer-events: none;
        opacity: 0;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu:before {
        position: absolute;
        z-index: -5;
        bottom: 100%;
        left: 20px;
        display: block;
        width: 16px;
        height: 16px;
        content: "";
        transform: rotate(-45deg) translateY(1rem);
        border-radius: 0.25rem;
        background: #fff;
        box-shadow: none;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu-right:before {
        right: 20px;
        left: auto;
    }
    .navbar-horizontal .navbar-nav:not(.navbar-nav-hover) .dropdown-menu.show {
        animation: show-navbar-dropdown 0.25s ease forwards;
        pointer-events: auto;
        opacity: 1;
    }
    .navbar-horizontal .navbar-nav:not(.navbar-nav-hover) .dropdown-menu.close {
        display: block;
        animation: hide-navbar-dropdown 0.15s ease backwards;
    }
    .navbar-horizontal .navbar-nav.navbar-nav-hover .dropdown-menu {
        display: block;
        transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        pointer-events: none;
        opacity: 0;
    }
    .navbar-horizontal .navbar-nav.navbar-nav-hover .nav-item.dropdown:hover > .dropdown-menu {
        display: block;
        visibility: visible;
        transform: translate(0, 0);
        animation: none;
        pointer-events: auto;
        opacity: 1;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu-inner {
        position: relative;
        padding: 1rem;
    }
}
.navbar-horizontal.navbar-transparent {
    position: absolute;
    z-index: 100;
    top: 0;
    width: 100%;
    border: 0;
    background-color: transparent;
    box-shadow: none;
}
.navbar-horizontal.navbar-transparent .navbar-brand {
    color: #fff;
}
.navbar-horizontal.navbar-transparent .navbar-toggler {
    color: #fff;
}
.navbar-horizontal.navbar-transparent .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.95)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
@media (min-width: 768px) {
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.95);
    }
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link:focus,
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, 0.65);
    }
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }
    .navbar-horizontal.navbar-transparent .navbar-nav .active > .nav-link,
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link.active,
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link.show,
    .navbar-horizontal.navbar-transparent .navbar-nav .show > .nav-link {
        color: rgba(255, 255, 255, 0.65);
    }
    .navbar-horizontal.navbar-transparent .navbar-brand {
        color: rgba(255, 255, 255, 0.95);
    }
    .navbar-horizontal.navbar-transparent .navbar-brand:focus,
    .navbar-horizontal.navbar-transparent .navbar-brand:hover {
        color: rgba(255, 255, 255, 0.95);
    }
}
.navbar-horizontal .navbar-collapse-header {
    display: none;
}
@media (max-width: 991.98px) {
    .navbar-horizontal .navbar-nav .nav-link {
        padding: 0.625rem 0;
        color: #172b4d !important;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu {
        min-width: auto;
        box-shadow: none;
    }
    .navbar-horizontal .navbar-nav .dropdown-menu .media svg {
        width: 30px;
    }
    .navbar-horizontal .navbar-collapse {
        position: absolute;
        z-index: 1050;
        top: 0;
        right: 0;
        left: 0;
        overflow-y: auto;
        width: calc(100% - 1.4rem);
        height: auto !important;
        margin: 0.7rem;
        opacity: 0;
    }
    .navbar-horizontal .navbar-collapse .navbar-toggler {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 20px;
        padding: 0;
        cursor: pointer;
    }
    .navbar-horizontal .navbar-collapse .navbar-toggler span {
        position: absolute;
        display: block;
        width: 100%;
        height: 2px;
        opacity: 1;
        border-radius: 2px;
        background: #283448;
    }
    .navbar-horizontal .navbar-collapse .navbar-toggler :nth-child(1) {
        transform: rotate(135deg);
    }
    .navbar-horizontal .navbar-collapse .navbar-toggler :nth-child(2) {
        transform: rotate(-135deg);
    }
    .navbar-horizontal .navbar-collapse .navbar-collapse-header {
        display: block;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    .navbar-horizontal .navbar-collapse .collapse-brand img {
        height: 36px;
    }
    .navbar-horizontal .navbar-collapse .collapse-close {
        text-align: right;
    }
    .navbar-horizontal .navbar-collapse.collapsing,
    .navbar-horizontal .navbar-collapse.show {
        padding: 1.5rem;
        animation: show-navbar-collapse 0.2s ease forwards;
        border-radius: 0.375rem;
        background: #fff;
        box-shadow: 0 50px 100px rgba(50, 50, 93, 0.1), 0 15px 35px rgba(50, 50, 93, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .navbar-horizontal .navbar-collapse.collapsing-out {
        animation: hide-navbar-collapse 0.2s ease forwards;
    }
}
@keyframes show-navbar-collapse {
    0% {
        transform: scale(0.95);
        transform-origin: 100% 0;
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes hide-navbar-collapse {
    from {
        transform: scale(1);
        transform-origin: 100% 0;
        opacity: 1;
    }
    to {
        transform: scale(0.95);
        opacity: 0;
    }
}
@keyframes show-navbar-dropdown {
    0% {
        transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        opacity: 0;
    }
    100% {
        transform: translate(0, 0);
        opacity: 1;
    }
}
@keyframes hide-navbar-dropdown {
    from {
        opacity: 1;
    }
    to {
        transform: translate(0, 10px);
        opacity: 0;
    }
}
.nav-open .sidenav {
    transform: translateX(0);
}
.nav-open .sidenav-toggler-inner .sidenav-toggler-line:first-child {
    width: 13px;
    transform: translateX(5px);
}
.nav-open .sidenav-toggler-inner .sidenav-toggler-line:last-child {
    width: 13px;
    transform: translateX(5px);
}
.navbar-vertical {
    padding-top: 0;
    border-width: 0 0 1px 0;
    border-style: solid;
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
}
.navbar-vertical.navbar-light {
    border-color: rgba(0, 0, 0, 0.05);
    background-color: #f6f9fc;
}
.navbar-vertical.navbar-dark {
    border-color: rgba(255, 255, 255, 0.1);
    background-color: transparent;
}
.navbar-vertical .navbar-brand {
    margin-right: 0;
}
.navbar-vertical .navbar-brand-img,
.navbar-vertical .navbar-brand > img {
    max-width: 100%;
    max-height: 2rem;
}
@media (min-width: 768px) {
    .navbar-vertical .navbar-collapse {
        margin-right: -1rem;
        margin-left: -1rem;
    }
    .navbar-vertical .navbar-collapse:before {
        display: block;
        margin: 0.5rem;
        content: "";
    }
}
.navbar-vertical .navbar-nav {
    margin-right: -1rem;
    margin-left: -1rem;
}
.navbar-vertical .navbar-nav .nav-link {
    font-size: 0.875rem;
    font-weight: 500;
    padding-right: 1rem;
    padding-left: 1rem;
}
.navbar-vertical .navbar-nav .nav-link.active {
    position: relative;
}
.navbar-vertical .navbar-nav .nav-link > i {
    font-size: 0.9375rem;
    line-height: 1.5rem;
    min-width: 2rem;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu {
    border: none;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu .dropdown-menu {
    margin-left: 0.5rem;
}
.navbar-vertical .navbar-nav .nav-sm .nav-link {
    font-size: 0.8125rem;
}
.navbar-vertical .navbar-nav .nav-link {
    display: flex;
    align-items: center;
}
.navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"]:after {
    font-family: "Font Awesome 5 Free";
    font-weight: 700;
    font-style: normal;
    font-variant: normal;
    display: inline-block;
    margin-left: auto;
    content: "\f105";
    transition: all 0.15s ease;
    color: #ced4da;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"]:after {
        transition: none;
    }
}
.navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"][aria-expanded="true"]:after {
    transform: rotate(90deg);
    color: var(--bs-primary);
}
.navbar-vertical .navbar-nav .nav .nav-link {
    padding-left: 3rem;
}
.navbar-vertical .navbar-nav .nav .nav .nav-link {
    padding-left: 3.5rem;
}
.navbar-vertical .navbar-heading {
    font-size: 0.75rem;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}
.navbar-vertical.navbar-expand-xs {
    position: fixed;
    top: 0;
    bottom: 0;
    display: block;
    overflow-y: auto;
    width: 100%;
    max-width: 250px;
    padding-right: 0;
    padding-left: 0;
}
.navbar-vertical.navbar-expand-xs .navbar-inner {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
.navbar-vertical.navbar-expand-xs > [class*="container"] {
    flex-direction: column;
    min-height: 100%;
    padding-right: 0;
    padding-left: 0;
    align-items: stretch;
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .navbar-vertical.navbar-expand-xs > [class*="container"] {
        height: 100%;
        min-height: none;
    }
}
.navbar-vertical.navbar-expand-xs.fixed-left {
    left: 0;
    border-width: 0 1px 0 0;
}
.navbar-vertical.navbar-expand-xs.fixed-right {
    right: 0;
    border-width: 0 0 0 1px;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse {
    display: flex;
    flex-direction: column;
    margin-right: -1.5rem;
    margin-left: -1.5rem;
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    flex: 1 1;
    align-items: stretch;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse > * {
    min-width: 100%;
}
.navbar-vertical.navbar-expand-xs .navbar-nav {
    flex-direction: column;
    margin-right: -1.5rem;
    margin-left: -1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link {
    padding: 0.675rem 1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav > .nav-item {
    margin-top: 2px;
}
.navbar-vertical.navbar-expand-xs .navbar-nav > .nav-item > .nav-link.active {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
    padding-right: 1rem;
    padding-left: 1rem;
    border-radius: 0.375rem;
    background: #f6f9fc;
}
.navbar-vertical.navbar-expand-xs .lavalamp-object {
    width: calc(100% - 1rem) !important;
    margin-right: 0.5rem;
    margin-left: 0.5rem;
    padding-right: 1rem;
    padding-left: 1rem;
    color: #fff;
    border-radius: 0.375rem;
    background: var(--bs-primary);
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 3.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav .nav-link {
    padding-left: 4.25rem;
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm {
        position: fixed;
        top: 0;
        bottom: 0;
        display: block;
        overflow-y: auto;
        width: 100%;
        max-width: 250px;
        padding-right: 0;
        padding-left: 0;
    }
    .navbar-vertical.navbar-expand-sm .navbar-inner {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-sm > [class*="container"] {
        flex-direction: column;
        min-height: 100%;
        padding-right: 0;
        padding-left: 0;
        align-items: stretch;
    }
}
@media all and (min-width: 576px) and (-ms-high-contrast: none), (min-width: 576px) and (-ms-high-contrast: active) {
    .navbar-vertical.navbar-expand-sm > [class*="container"] {
        height: 100%;
        min-height: none;
    }
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-sm.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-sm .navbar-collapse {
        display: flex;
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-sm .navbar-collapse > * {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav {
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
        padding: 0.675rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav > .nav-item > .nav-link.active {
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        border-radius: 0.375rem;
        background: #f6f9fc;
    }
    .navbar-vertical.navbar-expand-sm .lavalamp-object {
        width: calc(100% - 1rem) !important;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        color: #fff;
        border-radius: 0.375rem;
        background: var(--bs-primary);
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link {
        padding-top: 0.45rem;
        padding-bottom: 0.45rem;
        padding-left: 3.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md {
        position: fixed;
        top: 0;
        bottom: 0;
        display: block;
        overflow-y: auto;
        width: 100%;
        max-width: 250px;
        padding-right: 0;
        padding-left: 0;
    }
    .navbar-vertical.navbar-expand-md .navbar-inner {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-md > [class*="container"] {
        flex-direction: column;
        min-height: 100%;
        padding-right: 0;
        padding-left: 0;
        align-items: stretch;
    }
}
@media all and (min-width: 768px) and (-ms-high-contrast: none), (min-width: 768px) and (-ms-high-contrast: active) {
    .navbar-vertical.navbar-expand-md > [class*="container"] {
        height: 100%;
        min-height: none;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-md.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-md .navbar-collapse {
        display: flex;
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-md .navbar-collapse > * {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav {
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
        padding: 0.675rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav > .nav-item > .nav-link.active {
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        border-radius: 0.375rem;
        background: #f6f9fc;
    }
    .navbar-vertical.navbar-expand-md .lavalamp-object {
        width: calc(100% - 1rem) !important;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        color: #fff;
        border-radius: 0.375rem;
        background: var(--bs-primary);
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link {
        padding-top: 0.45rem;
        padding-bottom: 0.45rem;
        padding-left: 3.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg {
        position: fixed;
        top: 0;
        bottom: 0;
        display: block;
        overflow-y: auto;
        width: 100%;
        max-width: 250px;
        padding-right: 0;
        padding-left: 0;
    }
    .navbar-vertical.navbar-expand-lg .navbar-inner {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-lg > [class*="container"] {
        flex-direction: column;
        min-height: 100%;
        padding-right: 0;
        padding-left: 0;
        align-items: stretch;
    }
}
@media all and (min-width: 992px) and (-ms-high-contrast: none), (min-width: 992px) and (-ms-high-contrast: active) {
    .navbar-vertical.navbar-expand-lg > [class*="container"] {
        height: 100%;
        min-height: none;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-lg.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-lg .navbar-collapse {
        display: flex;
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-lg .navbar-collapse > * {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav {
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
        padding: 0.675rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav > .nav-item > .nav-link.active {
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        border-radius: 0.375rem;
        background: #f6f9fc;
    }
    .navbar-vertical.navbar-expand-lg .lavalamp-object {
        width: calc(100% - 1rem) !important;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        color: #fff;
        border-radius: 0.375rem;
        background: var(--bs-primary);
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link {
        padding-top: 0.45rem;
        padding-bottom: 0.45rem;
        padding-left: 3.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl {
        position: fixed;
        top: 0;
        bottom: 0;
        display: block;
        overflow-y: auto;
        width: 100%;
        max-width: 250px;
        padding-right: 0;
        padding-left: 0;
    }
    .navbar-vertical.navbar-expand-xl .navbar-inner {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-xl > [class*="container"] {
        flex-direction: column;
        min-height: 100%;
        padding-right: 0;
        padding-left: 0;
        align-items: stretch;
    }
}
@media all and (min-width: 1200px) and (-ms-high-contrast: none), (min-width: 1200px) and (-ms-high-contrast: active) {
    .navbar-vertical.navbar-expand-xl > [class*="container"] {
        height: 100%;
        min-height: none;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl.fixed-left {
        left: 0;
        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-xl.fixed-right {
        right: 0;
        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-xl .navbar-collapse {
        display: flex;
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-xl .navbar-collapse > * {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav {
        flex-direction: column;
        margin-right: -1.5rem;
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
        padding: 0.675rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav > .nav-item {
        margin-top: 2px;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav > .nav-item > .nav-link.active {
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        border-radius: 0.375rem;
        background: #f6f9fc;
    }
    .navbar-vertical.navbar-expand-xl .lavalamp-object {
        width: calc(100% - 1rem) !important;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-right: 1rem;
        padding-left: 1rem;
        color: #fff;
        border-radius: 0.375rem;
        background: var(--bs-primary);
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link {
        padding-top: 0.45rem;
        padding-bottom: 0.45rem;
        padding-left: 3.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav .nav-link {
        padding-left: 4.25rem;
    }
}
.navbar-vertical.navbar-expand-xs.fixed-left + .main-content {
    margin-left: 250px;
}
.navbar-vertical.navbar-expand-xs.fixed-right + .main-content {
    margin-right: 62px;
}
@media (min-width: 576px) {
    .navbar-vertical.navbar-expand-sm.fixed-left + .main-content {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-sm.fixed-right + .main-content {
        margin-right: 62px;
    }
}
@media (min-width: 768px) {
    .navbar-vertical.navbar-expand-md.fixed-left + .main-content {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-md.fixed-right + .main-content {
        margin-right: 62px;
    }
}
@media (min-width: 992px) {
    .navbar-vertical.navbar-expand-lg.fixed-left + .main-content {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-lg.fixed-right + .main-content {
        margin-right: 62px;
    }
}
@media (min-width: 1200px) {
    .navbar-vertical.navbar-expand-xl.fixed-left + .main-content {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-xl.fixed-right + .main-content {
        margin-right: 62px;
    }
}
.sidenav.fixed-left + .main-content {
    margin-left: 62px;
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .sidenav.fixed-left + .main-content {
        transition: none;
    }
}
.sidenav.fixed-right + .main-content {
    margin-right: 62px;
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .sidenav.fixed-right + .main-content {
        transition: none;
    }
}
@media (min-width: 1200px) {
    .g-sidenav-pinned .sidenav.fixed-left + .main-content {
        margin-left: 250px;
    }
    .g-sidenav-pinned .sidenav.fixed-right + .main-content {
        margin-right: 250px;
    }
}
.sidenav {
    z-index: 1050;
    transition: all 0.4s ease;
}
@media (min-width: 1200px) {
    .sidenav:hover {
        max-width: 250px;
    }
    .sidenav .sidenav-toggler {
        padding: 1.5rem;
    }
}
.sidenav .navbar-brand,
.sidenav .navbar-heading {
    padding: 1.5rem;
}
.sidenav-header {
    height: 78px;
    text-align: center;
}
.g-sidenav-show .sidenav .navbar-brand,
.g-sidenav-show .sidenav .navbar-heading {
    display: block;
}
.g-sidenav-show .sidenav .nav-item .collapse {
    height: auto;
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .g-sidenav-show .sidenav .nav-item .collapse {
        transition: none;
    }
}
.g-sidenav-show .sidenav .nav-link-text {
    transition: 0.3s ease;
    opacity: 1;
}
.g-sidenav-pinned .sidenav {
    max-width: 250px !important;
}
.g-sidenav-pinned .sidenav .navbar-brand,
.g-sidenav-pinned .sidenav .navbar-heading {
    display: block;
}
@media (min-width: 768px) {
    .nav-item .nav-link.active.active-pro {
        position: absolute;
        bottom: 10px;
        width: 100%;
        margin-left: 0 !important;
        padding-left: 25px !important;
        border-radius: 0 !important;
        background: #f6f9fc;
    }
}
@media (max-width: 1199.98px) {
    .sidenav {
        transform: translateX(-250px);
    }
    .sidenav.fixed-left + .main-content {
        margin-left: 0 !important;
    }
    .g-sidenav-pinned .sidenav {
        transform: translateX(0);
    }
}
.sidenav-toggler-inner,
.sidenav-toggler-line {
    width: 18px;
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .sidenav-toggler-inner,
    .sidenav-toggler-line {
        transition: none;
    }
}
.sidenav-toggler-inner {
    position: relative;
}
.sidenav-toggler-inner:before {
    position: absolute;
    top: -14px;
    left: -11px;
    width: 40px;
    height: 40px;
    content: "";
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: scale(0);
    border-radius: 50%;
}
@media (prefers-reduced-motion: reduce) {
    .sidenav-toggler-inner:before {
        transition: none;
    }
}
.sidenav-toggler-line {
    position: relative;
    display: block;
    height: 2px;
    background-color: #172b4d;
}
.sidenav-toggler-line:not(:last-child) {
    margin-bottom: 3px;
}
.sidenav-toggler-dark .sidenav-toggler-line {
    background-color: #fff;
}
.sidenav-toggler {
    cursor: pointer;
}
.sidenav-toggler.active .sidenav-toggler-inner:before {
    transform: scale(1);
}
.sidenav-toggler.active .sidenav-toggler-line:first-child {
    width: 13px;
    transform: translateX(5px);
}
.sidenav-toggler.active .sidenav-toggler-line:last-child {
    width: 13px;
    transform: translateX(5px);
}
.bodyClick {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
}
.navbar-search .input-group {
    transition: background-color 0.3s linear;
    transition-delay: 0.15s;
    border: 0 solid;
    border-radius: 2rem;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-search .input-group {
        transition: none;
    }
}
.navbar-search .input-group .input-group-text {
    padding-left: 1rem;
    border: 0;
    background-color: transparent;
}
.navbar-search .form-control {
    width: 250px;
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border: 0;
    background-color: transparent;
}
@media (prefers-reduced-motion: reduce) {
    .navbar-search .form-control {
        transition: none;
    }
}
.navbar-search .focused .input-group .form-control {
    width: 380px;
}
.navbar-search .close {
    display: none;
}
.navbar-search-dark .input-group {
    border-color: rgba(255, 255, 255, 0.6);
    background-color: rgba(23, 43, 77, 0.8);
}
.navbar-search-dark .input-group-text {
    color: rgba(255, 255, 255, 0.6);
}
.navbar-search-dark .form-control {
    color: rgba(255, 255, 255, 0.9);
}
.navbar-search-dark .form-control::-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.6);
}
.navbar-search-dark .form-control::placeholder {
    color: rgba(255, 255, 255, 0.6);
}
.navbar-search-dark .focused .input-group {
    border-color: rgba(255, 255, 255, 0.9);
    background-color: rgba(23, 43, 77, 0.9);
}
.navbar-search-light .input-group {
    border-color: rgba(0, 0, 0, 0.6);
    background-color: rgba(255, 255, 255, 0.9);
}
.navbar-search-light .input-group-text {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-search-light .form-control::-ms-input-placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .form-control::placeholder {
    color: rgba(0, 0, 0, 0.6);
}
.navbar-search-light .focused .input-group {
    border-color: rgba(0, 0, 0, 0.9);
    background-color: #fff;
}
@media (max-width: 575.98px) {
    .navbar-search {
        display: none;
        width: 100%;
        transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transform: translateX(-150%);
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .navbar-search {
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .navbar-search .form-group {
        width: 100%;
    }
    .navbar-search .form-control {
        width: auto;
    }
    .navbar-search .focused .input-group .form-control {
        width: auto;
    }
    .navbar-search .close {
        display: none;
        opacity: 0;
    }
    .navbar-search .close span {
        width: auto;
        height: auto;
    }
    .navbar-top .navbar-nav {
        transition: all 0.15s ease;
    }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
    .navbar-top .navbar-nav {
        transition: none;
    }
}
@media (max-width: 575.98px) {
    .g-navbar-search-showing .navbar-search .close {
        display: block;
    }
    .g-navbar-search-showing .navbar-top .navbar-nav {
        display: flex;
        transform: translateX(150%);
        opacity: 1;
    }
    .g-navbar-search-show .navbar-search {
        display: block;
    }
    .g-navbar-search-show .navbar-search .form-control {
        width: auto;
    }
    .g-navbar-search-show .navbar-search .close {
        line-height: 46px;
        position: absolute;
        top: 0;
        right: 0;
        width: 46px;
        height: 46px;
        cursor: pointer;
        text-align: center;
        color: #fff;
    }
    .g-navbar-search-show .navbar-top .navbar-nav {
        display: none;
    }
    .g-navbar-search-show .navbar-top .navbar-collapse {
        width: 100%;
    }
    .g-navbar-search-shown .navbar-search {
        transform: translateX(0);
    }
    .g-navbar-search-shown .navbar-search .close {
        display: block;
        opacity: 1;
    }
    .g-navbar-search-hiding .navbar-top .navbar-nav {
        display: flex;
        transform: translateX(150%);
        opacity: 0;
    }
    .g-navbar-search-hidden .navbar-top .navbar-nav {
        transform: translateX(0);
        opacity: 1;
    }
}
.navbar .dropdown-menu {
    margin: 0;
    pointer-events: none;
    opacity: 0;
}
.navbar .dropdown-menu-arrow:before {
    position: absolute;
    z-index: -5;
    bottom: 100%;
    left: 20px;
    display: block;
    width: 12px;
    height: 12px;
    content: "";
    transform: rotate(-45deg) translateY(12px);
    border-radius: 2px;
    background: #fff;
    box-shadow: none;
}
.navbar .dropdown-menu-right:before {
    right: 20px;
    left: auto;
}
.navbar:not(.navbar-nav-hover) .dropdown-menu.show {
    animation: show-navbar-dropdown 0.25s ease forwards;
    pointer-events: auto;
    opacity: 1;
}
.navbar:not(.navbar-nav-hover) .dropdown-menu.close {
    display: block;
    animation: hide-navbar-dropdown 0.15s ease backwards;
}
.navbar.navbar-nav-hover .dropdown-menu {
    display: block;
    transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
    transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
    pointer-events: none;
    opacity: 0;
}
.navbar.navbar-nav-hover .nav-item.dropdown:hover > .dropdown-menu {
    display: block;
    visibility: visible;
    transform: translate(0, 0);
    animation: none;
    pointer-events: auto;
    opacity: 1;
}
.navbar .dropdown-menu-inner {
    position: relative;
    padding: 1rem;
}
@keyframes show-navbar-dropdown {
    0% {
        transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
        transform: translate(0, 10px) perspective(200px);
        opacity: 0;
    }
    100% {
        transform: translate(0, 0);
        opacity: 1;
    }
}
@keyframes hide-navbar-dropdown {
    from {
        opacity: 1;
    }
    to {
        transform: translate(0, 10px);
        opacity: 0;
    }
}
.navbar-collapse-header {
    display: none;
}
@keyframes show-navbar-collapse {
    0% {
        transform: scale(0.95);
        transform-origin: 100% 0;
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes hide-navbar-collapse {
    from {
        transform: scale(1);
        transform-origin: 100% 0;
        opacity: 1;
    }
    to {
        transform: scale(0.95);
        opacity: 0;
    }
}
.navbar-top {
    padding-right: 1rem;
    padding-left: 1rem;
    border: 0;
}
.navbar-top .container,
.navbar-top .container-fluid,
.navbar-top .container-lg,
.navbar-top .container-md,
.navbar-top .container-sm,
.navbar-top .container-xl {
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px) {
    .navbar-top .navbar-brand {
        display: none;
    }
}
@media (max-width: 575.98px) {
    .navbar-top .navbar-collapse {
        width: 100%;
    }
    .navbar-top .nav-item {
        position: static;
    }
    .navbar-top .nav-item .dropdown-menu {
        position: absolute;
        right: auto;
        left: 3%;
        width: 94%;
        min-width: auto;
    }
}
.navbar-top.border-bottom.navbar-dark {
    border-color: rgba(255, 255, 255, 0.08) !important;
}
.navbar-top.border-bottom.navbar-light {
    border-color: rgba(0, 0, 0, 0.04) !important;
}
.sidenav-pinned .navbar-top .navbar-brand {
    display: none;
}
.nav-wrapper {
    padding: 1rem 0;
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
}
.nav-wrapper + .card {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.nav-link {
    color: var(--bs-body-color);
}
.nav-link:hover {
    color: var(--bs-primary);
}
.nav-link i.ni {
    position: relative;
    top: 2px;
}
.nav-pills .nav-item:not(:last-child) {
    padding-right: 1rem;
}
.nav-pills .nav-link {
    font-size: 0.875rem;
    font-weight: 500;
    padding: 0.75rem 1rem;
    transition: all 0.15s ease;
    color: var(--bs-primary);
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.nav-pills .nav-link:hover {
    color: #485fe0;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: var(--bs-primary);
}
@media (max-width: 575.98px) {
    .nav-pills .nav-item {
        margin-bottom: 1rem;
    }
}
@media (max-width: 767.98px) {
    .nav-pills:not(.nav-pills-circle) .nav-item {
        padding-right: 0;
    }
}
.nav-pills-circle .nav-link {
    line-height: 60px;
    width: 60px;
    height: 60px;
    padding: 0;
    text-align: center;
    border-radius: 50%;
}
.nav-pills-circle .nav-link-icon i,
.nav-pills-circle .nav-link-icon svg {
    font-size: 1rem;
}
.page-item.active .page-link {
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
.page-item .page-link,
.page-item span {
    font-size: 0.875rem;
    display: flex;
    width: 36px;
    height: 36px;
    margin: 0 3px;
    padding: 0;
    border-radius: 50% !important;
    align-items: center;
    justify-content: center;
}
.pagination-lg .page-item .page-link,
.pagination-lg .page-item span {
    line-height: 46px;
    width: 46px;
    height: 46px;
}
.pagination-sm .page-item .page-link,
.pagination-sm .page-item span {
    line-height: 30px;
    width: 30px;
    height: 30px;
}
.popover {
    border: 0;
}
.popover-header {
    font-weight: 600;
}
.popover-primary {
    background-color: var(--bs-primary);
}
.popover-primary .popover-header {
    color: #fff;
    background-color: var(--bs-primary);
}
.popover-primary .popover-body {
    color: #fff;
}
.popover-primary .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-primary.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-primary.bs-popover-top .arrow::after {
    border-top-color: var(--bs-primary);
}
.popover-primary.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-primary.bs-popover-right .arrow::after {
    border-right-color: var(--bs-primary);
}
.popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-primary.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-primary);
}
.popover-primary.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-primary.bs-popover-left .arrow::after {
    border-left-color: var(--bs-primary);
}
.popover-secondary {
    background-color: var(--bs-secondary);
}
.popover-secondary .popover-header {
    color: var(--bs-dark);
    background-color: var(--bs-secondary);
}
.popover-secondary .popover-body {
    color: var(--bs-dark);
}
.popover-secondary .popover-header {
    border-color: rgba(33, 37, 41, 0.2);
}
.popover-secondary.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-secondary.bs-popover-top .arrow::after {
    border-top-color: var(--bs-secondary);
}
.popover-secondary.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-secondary.bs-popover-right .arrow::after {
    border-right-color: var(--bs-secondary);
}
.popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-secondary.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-secondary);
}
.popover-secondary.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-secondary.bs-popover-left .arrow::after {
    border-left-color: var(--bs-secondary);
}
.popover-success {
    background-color: var(--bs-success);
}
.popover-success .popover-header {
    color: #fff;
    background-color: var(--bs-success);
}
.popover-success .popover-body {
    color: #fff;
}
.popover-success .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-success.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-success.bs-popover-top .arrow::after {
    border-top-color: var(--bs-success);
}
.popover-success.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-success.bs-popover-right .arrow::after {
    border-right-color: var(--bs-success);
}
.popover-success.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-success.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-success);
}
.popover-success.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-success.bs-popover-left .arrow::after {
    border-left-color: var(--bs-success);
}
.popover-info {
    background-color: var(--bs-info);
}
.popover-info .popover-header {
    color: #fff;
    background-color: var(--bs-info);
}
.popover-info .popover-body {
    color: #fff;
}
.popover-info .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-info.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-info.bs-popover-top .arrow::after {
    border-top-color: var(--bs-info);
}
.popover-info.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-info.bs-popover-right .arrow::after {
    border-right-color: var(--bs-info);
}
.popover-info.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-info.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-info);
}
.popover-info.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-info.bs-popover-left .arrow::after {
    border-left-color: var(--bs-info);
}
.popover-warning {
    background-color: var(--bs-warning);
}
.popover-warning .popover-header {
    color: #fff;
    background-color: var(--bs-warning);
}
.popover-warning .popover-body {
    color: #fff;
}
.popover-warning .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-warning.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-warning.bs-popover-top .arrow::after {
    border-top-color: var(--bs-warning);
}
.popover-warning.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-warning.bs-popover-right .arrow::after {
    border-right-color: var(--bs-warning);
}
.popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-warning.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-warning);
}
.popover-warning.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-warning.bs-popover-left .arrow::after {
    border-left-color: var(--bs-warning);
}
.popover-danger {
    background-color: var(--bs-danger);
}
.popover-danger .popover-header {
    color: #fff;
    background-color: var(--bs-danger);
}
.popover-danger .popover-body {
    color: #fff;
}
.popover-danger .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-danger.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-danger.bs-popover-top .arrow::after {
    border-top-color: var(--bs-danger);
}
.popover-danger.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-danger.bs-popover-right .arrow::after {
    border-right-color: var(--bs-danger);
}
.popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-danger.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-danger);
}
.popover-danger.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-danger.bs-popover-left .arrow::after {
    border-left-color: var(--bs-danger);
}
.popover-light {
    background-color: #adb5bd;
}
.popover-light .popover-header {
    color: #fff;
    background-color: #adb5bd;
}
.popover-light .popover-body {
    color: #fff;
}
.popover-light .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-light.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-light.bs-popover-top .arrow::after {
    border-top-color: #adb5bd;
}
.popover-light.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-light.bs-popover-right .arrow::after {
    border-right-color: #adb5bd;
}
.popover-light.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-light.bs-popover-bottom .arrow::after {
    border-bottom-color: #adb5bd;
}
.popover-light.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-light.bs-popover-left .arrow::after {
    border-left-color: #adb5bd;
}
.popover-dark {
    background-color: var(--bs-dark);
}
.popover-dark .popover-header {
    color: #fff;
    background-color: var(--bs-dark);
}
.popover-dark .popover-body {
    color: #fff;
}
.popover-dark .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-dark.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-dark.bs-popover-top .arrow::after {
    border-top-color: var(--bs-dark);
}
.popover-dark.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-dark.bs-popover-right .arrow::after {
    border-right-color: var(--bs-dark);
}
.popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-dark.bs-popover-bottom .arrow::after {
    border-bottom-color: var(--bs-dark);
}
.popover-dark.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-dark.bs-popover-left .arrow::after {
    border-left-color: var(--bs-dark);
}
.popover-default {
    background-color: #172b4d;
}
.popover-default .popover-header {
    color: #fff;
    background-color: #172b4d;
}
.popover-default .popover-body {
    color: #fff;
}
.popover-default .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-default.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-default.bs-popover-top .arrow::after {
    border-top-color: #172b4d;
}
.popover-default.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-default.bs-popover-right .arrow::after {
    border-right-color: #172b4d;
}
.popover-default.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-default.bs-popover-bottom .arrow::after {
    border-bottom-color: #172b4d;
}
.popover-default.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-default.bs-popover-left .arrow::after {
    border-left-color: #172b4d;
}
.popover-white {
    background-color: #fff;
}
.popover-white .popover-header {
    color: var(--bs-dark);
    background-color: #fff;
}
.popover-white .popover-body {
    color: var(--bs-dark);
}
.popover-white .popover-header {
    border-color: rgba(33, 37, 41, 0.2);
}
.popover-white.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-white.bs-popover-top .arrow::after {
    border-top-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-white.bs-popover-right .arrow::after {
    border-right-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-white.bs-popover-bottom .arrow::after {
    border-bottom-color: #fff;
}
.popover-white.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-white.bs-popover-left .arrow::after {
    border-left-color: #fff;
}
.popover-neutral {
    background-color: #fff;
}
.popover-neutral .popover-header {
    color: var(--bs-dark);
    background-color: #fff;
}
.popover-neutral .popover-body {
    color: var(--bs-dark);
}
.popover-neutral .popover-header {
    border-color: rgba(33, 37, 41, 0.2);
}
.popover-neutral.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-neutral.bs-popover-top .arrow::after {
    border-top-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-neutral.bs-popover-right .arrow::after {
    border-right-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-neutral.bs-popover-bottom .arrow::after {
    border-bottom-color: #fff;
}
.popover-neutral.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-neutral.bs-popover-left .arrow::after {
    border-left-color: #fff;
}
.popover-darker {
    background-color: #000;
}
.popover-darker .popover-header {
    color: #fff;
    background-color: #000;
}
.popover-darker .popover-body {
    color: #fff;
}
.popover-darker .popover-header {
    border-color: rgba(255, 255, 255, 0.2);
}
.popover-darker.bs-popover-auto[x-placement^="top"] .arrow::after,
.popover-darker.bs-popover-top .arrow::after {
    border-top-color: #000;
}
.popover-darker.bs-popover-auto[x-placement^="right"] .arrow::after,
.popover-darker.bs-popover-right .arrow::after {
    border-right-color: #000;
}
.popover-darker.bs-popover-auto[x-placement^="bottom"] .arrow::after,
.popover-darker.bs-popover-bottom .arrow::after {
    border-bottom-color: #000;
}
.popover-darker.bs-popover-auto[x-placement^="left"] .arrow::after,
.popover-darker.bs-popover-left .arrow::after {
    border-left-color: #000;
}
.progress-wrapper {
    position: relative;
    padding-top: 1.5rem;
}
.progress {
    overflow: hidden;
    height: 8px;
    margin-bottom: 1rem;
    border-radius: 0.25rem;
    background-color: #e9ecef;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress .sr-only {
    font-size: 13px;
    line-height: 20px;
    left: 0;
    clip: auto;
    width: auto;
    height: 20px;
    margin: 0 0 0 30px;
}
.progress-sm {
    height: 5px;
}
.progress-xs {
    height: 3px;
}
.progress-heading {
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 2px;
    padding: 0;
}
.progress-bar {
    height: auto;
    border-radius: 0;
    box-shadow: none;
}
.progress-info {
    display: flex;
    margin-bottom: 0.5rem;
    align-items: center;
    justify-content: space-between;
}
.progress-label span {
    font-size: 0.625rem;
    font-weight: 600;
    display: inline-block;
    padding: 0.25rem 1rem;
    text-transform: uppercase;
    color: var(--bs-primary);
    border-radius: 30px;
    background: rgba(94, 114, 228, 0.1);
}
.progress-percentage {
    text-align: right;
}
.progress-percentage span {
    font-size: 0.875rem;
    font-weight: 600;
    display: inline-block;
    color: #8898aa;
}
.separator {
    position: absolute;
    top: auto;
    right: 0;
    left: 0;
    overflow: hidden;
    width: 100%;
    height: 150px;
    transform: translateZ(0);
    pointer-events: none;
}
.separator svg {
    position: absolute;
    pointer-events: none;
}
.separator-top {
    top: 0;
    bottom: auto;
}
.separator-top svg {
    top: 0;
}
.separator-bottom {
    top: auto;
    bottom: 0;
}
.separator-bottom svg {
    bottom: 0;
}
.separator-inverse {
    transform: rotate(180deg);
}
.separator-skew {
    height: 60px;
}
@media (min-width: 1200px) {
    .separator-skew {
        height: 70px;
    }
}
.section-nucleo-icons {
    --icon-size: 5rem;
    --icon-sm-size: 3.75rem;
    --gutter: 7rem;
}
.section-nucleo-icons .icons-container {
    position: relative;
    z-index: 1;
    max-width: 100%;
    height: 360px;
    margin: 0 auto;
}
.section-nucleo-icons .icons-container i {
    position: absolute;
    z-index: 1;
    display: inline-flex;
    transition: all 0.2s cubic-bezier(0.25, 0.65, 0.9, 0.75);
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15);
    align-items: center;
    justify-content: center;
}
.section-nucleo-icons .icons-container i.icon {
    font-size: 1.7em;
    width: var(--icon-size);
    height: var(--icon-size);
}
.section-nucleo-icons .icons-container i.icon-sm {
    font-size: 1.5em;
    width: var(--icon-sm-size);
    height: var(--icon-sm-size);
}
.section-nucleo-icons .icons-container i:nth-child(1) {
    font-size: 42px;
    z-index: 2;
    color: var(--bs-warning);
}
.section-nucleo-icons .icons-container i {
    opacity: 1;
}
.section-nucleo-icons .icons-container i:nth-child(1) {
    font-size: 42px;
    top: 50%;
    left: 50%;
    color: var(--bs-warning);
}
.section-nucleo-icons .icons-container i:nth-child(2) {
    top: 50%;
    left: calc(50% + (var(--gutter) * 1.7));
}
.section-nucleo-icons .icons-container i:nth-child(3) {
    top: calc(50% + var(--gutter));
    left: calc(50% + var(--gutter));
}
.section-nucleo-icons .icons-container i:nth-child(4) {
    top: calc(50% - var(--gutter));
    left: calc(50% + var(--gutter));
}
.section-nucleo-icons .icons-container i:nth-child(5) {
    top: 50%;
    left: calc(50% + (var(--gutter) * 4));
}
.section-nucleo-icons .icons-container i:nth-child(6) {
    top: calc(50% + (var(--gutter) * 1.5));
    left: calc(50% + (var(--gutter) * 2.7));
}
.section-nucleo-icons .icons-container i:nth-child(7) {
    top: calc(50% - (var(--gutter) * 1.5));
    left: calc(50% + (var(--gutter) * 2.7));
}
.section-nucleo-icons .icons-container i:nth-child(8) {
    top: 50%;
    left: calc(50% - (var(--gutter) * 1.7));
}
.section-nucleo-icons .icons-container i:nth-child(9) {
    top: calc(50% + var(--gutter));
    left: calc(50% - var(--gutter));
}
.section-nucleo-icons .icons-container i:nth-child(10) {
    top: calc(50% - var(--gutter));
    left: calc(50% - var(--gutter));
}
.section-nucleo-icons .icons-container i:nth-child(11) {
    top: 50%;
    left: calc(50% - (var(--gutter) * 4));
}
.section-nucleo-icons .icons-container i:nth-child(12) {
    top: calc(50% + (var(--gutter) * 1.5));
    left: calc(50% - (var(--gutter) * 2.7));
}
.section-nucleo-icons .icons-container i:nth-child(13) {
    top: calc(50% - (var(--gutter) * 1.5));
    left: calc(50% - (var(--gutter) * 2.7));
}
.table thead th {
    font-size: 0.65rem;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-bottom: 1px solid #e9ecef;
}
.table th {
    font-weight: 600;
}
.table td .progress {
    width: 120px;
    height: 3px;
    margin: 0;
}
.table td,
.table th {
    font-size: 0.8125rem;
    white-space: nowrap;
}
.table.align-items-center td,
.table.align-items-center th {
    vertical-align: middle;
}
.table .thead-dark th {
    color: #4d7bca;
    background-color: #1c345d;
}
.table .thead-dark th a {
    color: #4d7bca;
}
.table .thead-light th {
    color: #8898aa;
    background-color: #f6f9fc;
}
.table .thead-light th a {
    color: #8898aa;
}
.table-hover tr {
    transition: all 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
    .table-hover tr {
        transition: none;
    }
}
.table-flush td,
.table-flush th {
    border-right: 0;
    border-left: 0;
}
.table-flush tbody tr:first-child td,
.table-flush tbody tr:first-child th {
    border-top: 0;
}
.table-flush tbody tr:last-child td,
.table-flush tbody tr:last-child th {
    border-bottom: 0;
}
.card .table {
    margin-bottom: 0;
}
.card .table td,
.card .table th {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
.table .custom-toggle {
    display: block;
}
p {
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
}
.lead {
    font-size: 1.25rem;
    font-weight: 300;
    line-height: 1.7;
    margin-top: 1.5rem;
}
.lead + .btn-wrapper {
    margin-top: 3rem;
}
.description {
    font-size: 0.875rem;
}
article h4:not(:first-child),
article h5:not(:first-child) {
    margin-top: 3rem;
}
article h4,
article h5 {
    margin-bottom: 1.5rem;
}
article figure {
    margin: 3rem 0;
}
article h5 + figure {
    margin-top: 0;
}
.display-1 span,
.display-2 span,
.display-3 span,
.display-4 span {
    font-weight: 300;
    display: block;
}
h1 > a,
h2 > a,
h3 > a,
h4 > a,
h5 > a,
h6 > a {
    color: inherit;
}
.heading {
    font-size: 0.95rem;
    font-weight: 600;
    letter-spacing: 0.025em;
    text-transform: uppercase;
}
.heading-small {
    font-size: 0.75rem;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}
.heading-title {
    font-size: 1.375rem;
    font-weight: 600;
    letter-spacing: 0.025em;
    text-transform: uppercase;
}
.heading-section {
    font-size: 1.375rem;
    font-weight: 600;
    letter-spacing: 0.025em;
    text-transform: uppercase;
}
.heading-section img {
    display: block;
    width: 72px;
    height: 72px;
    margin-bottom: 1.5rem;
}
small{
    font-size: 10px;
}
.heading-section.text-center img {
    margin-right: auto;
    margin-left: auto;
}
.surtitle {
    margin-bottom: 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #8898aa;
}
.bg-blue {
    background-color: var(--bs-primary) !important;
}
a.bg-blue:focus,
a.bg-blue:hover,
button.bg-blue:focus,
button.bg-blue:hover {
    background-color: #324cdd !important;
}
.bg-indigo {
    background-color: #5603ad !important;
}
a.bg-indigo:focus,
a.bg-indigo:hover,
button.bg-indigo:focus,
button.bg-indigo:hover {
    background-color: #3d027b !important;
}
.bg-purple {
    background-color: #8965e0 !important;
}
a.bg-purple:focus,
a.bg-purple:hover,
button.bg-purple:focus,
button.bg-purple:hover {
    background-color: #683bd7 !important;
}
.bg-pink {
    background-color: #f3a4b5 !important;
}
a.bg-pink:focus,
a.bg-pink:hover,
button.bg-pink:focus,
button.bg-pink:hover {
    background-color: #ed7790 !important;
}
.bg-red {
    background-color: var(--bs-danger) !important;
}
a.bg-red:focus,
a.bg-red:hover,
button.bg-red:focus,
button.bg-red:hover {
    background-color: #ec0c38 !important;
}
.bg-orange {
    background-color: var(--bs-warning) !important;
}
a.bg-orange:focus,
a.bg-orange:hover,
button.bg-orange:focus,
button.bg-orange:hover {
    background-color: #fa3a0e !important;
}
.bg-yellow {
    background-color: #ffd600 !important;
}
a.bg-yellow:focus,
a.bg-yellow:hover,
button.bg-yellow:focus,
button.bg-yellow:hover {
    background-color: #ccab00 !important;
}
.bg-green {
    background-color: var(--bs-success) !important;
}
a.bg-green:focus,
a.bg-green:hover,
button.bg-green:focus,
button.bg-green:hover {
    background-color: #24a46d !important;
}
.bg-teal {
    background-color: var(--bs-info) !important;
}
a.bg-teal:focus,
a.bg-teal:hover,
button.bg-teal:focus,
button.bg-teal:hover {
    background-color: #0da5c0 !important;
}
.bg-cyan {
    background-color: #2bffc6 !important;
}
a.bg-cyan:focus,
a.bg-cyan:hover,
button.bg-cyan:focus,
button.bg-cyan:hover {
    background-color: #00f7b5 !important;
}
.bg-white {
    background-color: #fff !important;
}
a.bg-white:focus,
a.bg-white:hover,
button.bg-white:focus,
button.bg-white:hover {
    background-color: #e6e6e6 !important;
}
.bg-gray {
    background-color: #8898aa !important;
}
a.bg-gray:focus,
a.bg-gray:hover,
button.bg-gray:focus,
button.bg-gray:hover {
    background-color: #6a7e95 !important;
}
.bg-gray-dark {
    background-color: #32325d !important;
}
a.bg-gray-dark:focus,
a.bg-gray-dark:hover,
button.bg-gray-dark:focus,
button.bg-gray-dark:hover {
    background-color: #20203c !important;
}
.bg-light {
    background-color: var(--bs-light) !important;
}
a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
    background-color: #b1bbc4 !important;
}
.bg-lighter {
    background-color: #e9ecef !important;
}
a.bg-lighter:focus,
a.bg-lighter:hover,
button.bg-lighter:focus,
button.bg-lighter:hover {
    background-color: #cbd3da !important;
}
.bg-gradient-primary {
    background: linear-gradient(87deg, var(--bs-gradient-primary-right) 0, var(--bs-gradient-primary-left) 100%) !important;
}
.bg-gradient-secondary {
    background: linear-gradient(87deg, var(--bs-gradient-secondary-right) 0, var(--bs-gradient-secondary-left) 100%) !important;
}
.bg-gradient-success {
    background: linear-gradient(87deg, var(--bs-gradient-success-right) 0, var(--bs-gradient-success-left) 100%) !important;
}
.bg-gradient-info {
    background: linear-gradient(87deg, var(--bs-gradient-info-right) 0, var(--bs-gradient-info-left) 100%) !important;
}
.bg-gradient-warning {
    background: linear-gradient(87deg, var(--bs-gradient-warning-right) 0, var(--bs-gradient-warning-left) 100%) !important;
}
.bg-gradient-danger {
    background: linear-gradient(87deg, var(--bs-gradient-danger-right) 0, var(--bs-gradient-danger-left) 100%) !important;
}
.bg-gradient-light {
    background: linear-gradient(87deg, #adb5bd 0, #adaebd 100%) !important;
}
.bg-gradient-dark {
    background: linear-gradient(87deg, var(--bs-gradient-dark-right) 0, var(--bs-gradient-dark-left) 100%) !important;
}
.bg-gradient-default {
    background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}
.bg-gradient-white {
    background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}
.bg-gradient-neutral {
    background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}
.bg-gradient-darker {
    background: linear-gradient(87deg, #000 0, #000 100%) !important;
}
.bg-gradient-blue {
    background: linear-gradient(87deg, var(--bs-gradient-primary-right) 0, var(--bs-gradient-primary-left) 100%) !important;
}
.bg-gradient-indigo {
    background: linear-gradient(87deg, #5603ad 0, #9d03ad 100%) !important;
}
.bg-gradient-purple {
    background: linear-gradient(87deg, #8965e0 0, #bc65e0 100%) !important;
}
.bg-gradient-pink {
    background: linear-gradient(87deg, #f3a4b5 0, #f3b4a4 100%) !important;
}
.bg-gradient-red {
    background: linear-gradient(87deg, var(--bs-gradient-danger-right) 0, var(--bs-gradient-danger-left) 100%) !important;
}
.bg-gradient-orange {
    background: linear-gradient(87deg, var(--bs-gradient-warning-right) 0, var(--bs-gradient-warning-left) 100%) !important;
}
.bg-gradient-yellow {
    background: linear-gradient(87deg, #ffd600 0, #beff00 100%) !important;
}
.bg-gradient-green {
    background: linear-gradient(87deg, var(--bs-gradient-success-right) 0, var(--bs-gradient-success-left) 100%) !important;
}
.bg-gradient-teal {
    background: linear-gradient(87deg, var(--bs-gradient-info-right) 0, var(--bs-gradient-info-left) 100%) !important;
}
.bg-gradient-cyan {
    background: linear-gradient(87deg, #2bffc6 0, #2be0ff 100%) !important;
}
.bg-gradient-white {
    background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}
.bg-gradient-gray {
    background: linear-gradient(87deg, #8898aa 0, #888aaa 100%) !important;
}
.bg-gradient-gray-dark {
    background: linear-gradient(87deg, #32325d 0, #44325d 100%) !important;
}
.bg-gradient-light {
    background: linear-gradient(87deg, var(--bs-gradient-light-right) 0, var(--bs-gradient-light-left) 100%) !important;
}
.bg-gradient-lighter {
    background: linear-gradient(87deg, #e9ecef 0, #e9eaef 100%) !important;
}
.bg-translucent-primary {
    background-color: rgba(63, 87, 223, 0.6) !important;
}
a.bg-translucent-primary:focus,
a.bg-translucent-primary:hover,
button.bg-translucent-primary:focus,
button.bg-translucent-primary:hover {
    background-color: rgba(42, 68, 219, 0.6) !important;
}
.bg-translucent-secondary {
    background-color: rgba(221, 234, 242, 0.6) !important;
}
a.bg-translucent-secondary:focus,
a.bg-translucent-secondary:hover,
button.bg-translucent-secondary:focus,
button.bg-translucent-secondary:hover {
    background-color: rgba(202, 222, 235, 0.6) !important;
}
.bg-translucent-success {
    background-color: rgba(39, 177, 118, 0.6) !important;
}
a.bg-translucent-success:focus,
a.bg-translucent-success:hover,
button.bg-translucent-success:focus,
button.bg-translucent-success:hover {
    background-color: rgba(34, 156, 104, 0.6) !important;
}
.bg-translucent-info {
    background-color: rgba(14, 177, 206, 0.6) !important;
}
a.bg-translucent-info:focus,
a.bg-translucent-info:hover,
button.bg-translucent-info:focus,
button.bg-translucent-info:hover {
    background-color: rgba(12, 156, 183, 0.6) !important;
}
.bg-translucent-warning {
    background-color: rgba(250, 70, 29, 0.6) !important;
}
a.bg-translucent-warning:focus,
a.bg-translucent-warning:hover,
button.bg-translucent-warning:focus,
button.bg-translucent-warning:hover {
    background-color: rgba(249, 51, 5, 0.6) !important;
}
.bg-translucent-danger {
    background-color: rgba(243, 20, 64, 0.6) !important;
}
a.bg-translucent-danger:focus,
a.bg-translucent-danger:hover,
button.bg-translucent-danger:focus,
button.bg-translucent-danger:hover {
    background-color: rgba(227, 11, 54, 0.6) !important;
}
.bg-translucent-light {
    background-color: rgba(153, 163, 173, 0.6) !important;
}
a.bg-translucent-light:focus,
a.bg-translucent-light:hover,
button.bg-translucent-light:focus,
button.bg-translucent-light:hover {
    background-color: rgba(139, 150, 162, 0.6) !important;
}
.bg-translucent-dark {
    background-color: rgba(17, 19, 21, 0.6) !important;
}
a.bg-translucent-dark:focus,
a.bg-translucent-dark:hover,
button.bg-translucent-dark:focus,
button.bg-translucent-dark:hover {
    background-color: rgba(6, 6, 7, 0.6) !important;
}
.bg-translucent-default {
    background-color: rgba(15, 28, 50, 0.6) !important;
}
a.bg-translucent-default:focus,
a.bg-translucent-default:hover,
button.bg-translucent-default:focus,
button.bg-translucent-default:hover {
    background-color: rgba(9, 17, 30, 0.6) !important;
}
.bg-translucent-white {
    background-color: rgba(237, 237, 237, 0.6) !important;
}
a.bg-translucent-white:focus,
a.bg-translucent-white:hover,
button.bg-translucent-white:focus,
button.bg-translucent-white:hover {
    background-color: rgba(224, 224, 224, 0.6) !important;
}
.bg-translucent-neutral {
    background-color: rgba(237, 237, 237, 0.6) !important;
}
a.bg-translucent-neutral:focus,
a.bg-translucent-neutral:hover,
button.bg-translucent-neutral:focus,
button.bg-translucent-neutral:hover {
    background-color: rgba(224, 224, 224, 0.6) !important;
}
.bg-translucent-darker {
    background-color: rgba(0, 0, 0, 0.6) !important;
}
a.bg-translucent-darker:focus,
a.bg-translucent-darker:hover,
button.bg-translucent-darker:focus,
button.bg-translucent-darker:hover {
    background-color: rgba(0, 0, 0, 0.6) !important;
}
.section-primary {
    background-color: #f8f9fe !important;
}
a.section-primary:focus,
a.section-primary:hover,
button.section-primary:focus,
button.section-primary:hover {
    background-color: #cbd3f8 !important;
}
.section-secondary {
    background-color: var(--bs-secondary) !important;
}
a.section-secondary:focus,
a.section-secondary:hover,
button.section-secondary:focus,
button.section-secondary:hover {
    background-color: #d2e3ee !important;
}
.section-light {
    background-color: var(--bs-light) !important;
}
a.section-light:focus,
a.section-light:hover,
button.section-light:focus,
button.section-light:hover {
    background-color: #b1bbc4 !important;
}
.section-dark {
    background-color: var(--bs-dark) !important;
}
a.section-dark:focus,
a.section-dark:hover,
button.section-dark:focus,
button.section-dark:hover {
    background-color: #0a0c0d !important;
}
.section-darker {
    background-color: #000 !important;
}
a.section-darker:focus,
a.section-darker:hover,
button.section-darker:focus,
button.section-darker:hover {
    background-color: #000 !important;
}

.fill-primary {
    fill: var(--bs-primary);
}
.stroke-primary {
    stroke: var(--bs-primary);
}
.fill-secondary {
    fill: var(--bs-secondary);
}
.stroke-secondary {
    stroke: var(--bs-secondary);
}
.fill-success {
    fill: var(--bs-success);
}
.stroke-success {
    stroke: var(--bs-success);
}
.fill-info {
    fill: var(--bs-info);
}
.stroke-info {
    stroke: var(--bs-info);
}
.fill-warning {
    fill: var(--bs-warning);
}
.stroke-warning {
    stroke: var(--bs-warning);
}
.fill-danger {
    fill: var(--bs-danger);
}
.stroke-danger {
    stroke: var(--bs-danger);
}
.fill-light {
    fill: #adb5bd;
}
.stroke-light {
    stroke: #adb5bd;
}
.fill-dark {
    fill: var(--bs-dark);
}
.stroke-dark {
    stroke: var(--bs-dark);
}
.fill-default {
    fill: #172b4d;
}
.stroke-default {
    stroke: #172b4d;
}
.fill-white {
    fill: #fff;
}
.stroke-white {
    stroke: #fff;
}
.fill-neutral {
    fill: #fff;
}
.stroke-neutral {
    stroke: #fff;
}
.fill-darker {
    fill: #000;
}
.stroke-darker {
    stroke: #000;
}
.fill-opacity-8 {
    fill-opacity: 0.8;
}
.blur--hover {
    position: relative;
}
.blur--hover .blur-item {
    transition: 1s cubic-bezier(0.19, 1, 0.22, 1);
    opacity: 1;
    will-change: transform;
    filter: blur(0);
}
.blur--hover .blur-hidden {
    position: absolute;
    z-index: 100;
    top: calc(50% + 7px);
    left: 50%;
    transition: all 0.15s ease;
    transform: translate(-50%, -50%);
    opacity: 0;
}
.blur--hover:hover .blur-item {
    z-index: 1;
    transform: scale(0.95);
    opacity: 0.8;
    filter: blur(10px);
}
.blur--hover:hover .blur-hidden {
    top: 50%;
    opacity: 1;
}
.floating {
    animation: floating 3s ease infinite;
    will-change: transform;
}
.floating:hover {
    animation-play-state: paused;
}
.floating-lg {
    animation: floating-lg 3s ease infinite;
}
.floating-sm {
    animation: floating-sm 3s ease infinite;
}
@keyframes floating-lg {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(15px);
    }
    100% {
        transform: translateY(0);
    }
}
@keyframes floating {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(10px);
    }
    100% {
        transform: translateY(0);
    }
}
@keyframes floating-sm {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(5px);
    }
    100% {
        transform: translateY(0);
    }
}
.floatfix:after,
.floatfix:before {
    display: table;
    content: "";
}
.floatfix:after {
    clear: both;
}
.img-center {
    display: block;
    margin-right: auto;
    margin-left: auto;
}
.opacity-1 {
    opacity: 0.1 !important;
}
.opacity-2 {
    opacity: 0.2 !important;
}
.opacity-3 {
    opacity: 0.3 !important;
}
.opacity-4 {
    opacity: 0.4 !important;
}
.opacity-5 {
    opacity: 0.5 !important;
}
.opacity-6 {
    opacity: 0.6 !important;
}
.opacity-7 {
    opacity: 0.7 !important;
}
.opacity-8 {
    opacity: 0.8 !important;
}
.opacity-8 {
    opacity: 0.9 !important;
}
.opacity-10 {
    opacity: 1 !important;
}
.overflow-visible {
    overflow: visible !important;
}
.overflow-hidden {
    overflow: hidden !important;
}
.top-0 {
    top: 0;
}
.right-0 {
    right: 0;
}
.bottom-0 {
    bottom: 0;
}
.left-0 {
    left: 0;
}
.top-1 {
    top: 0.25rem;
}
.right-1 {
    right: 0.25rem;
}
.bottom-1 {
    bottom: 0.25rem;
}
.left-1 {
    left: 0.25rem;
}
.top-2 {
    top: 0.5rem;
}
.right-2 {
    right: 0.5rem;
}
.bottom-2 {
    bottom: 0.5rem;
}
.left-2 {
    left: 0.5rem;
}
.top-3 {
    top: 1rem;
}
.right-3 {
    right: 1rem;
}
.bottom-3 {
    bottom: 1rem;
}
.left-3 {
    left: 1rem;
}
.top-4 {
    top: 1.5rem;
}
.right-4 {
    right: 1.5rem;
}
.bottom-4 {
    bottom: 1.5rem;
}
.left-4 {
    left: 1.5rem;
}
.top-5 {
    top: 3rem;
}
.right-5 {
    right: 3rem;
}
.bottom-5 {
    bottom: 3rem;
}
.left-5 {
    left: 3rem;
}
.top--9 {
    top: -10rem;
}
.right--9 {
    right: -10rem;
}
.bottom--9 {
    bottom: -10rem;
}
.left--9 {
    left: -10rem;
}
.top--8 {
    top: -8rem;
}
.right--8 {
    right: -8rem;
}
.bottom--8 {
    bottom: -8rem;
}
.left--8 {
    left: -8rem;
}
.top--7 {
    top: -6rem;
}
.right--7 {
    right: -6rem;
}
.bottom--7 {
    bottom: -6rem;
}
.left--7 {
    left: -6rem;
}
.top--6 {
    top: -4.5rem;
}
.right--6 {
    right: -4.5rem;
}
.bottom--6 {
    bottom: -4.5rem;
}
.left--6 {
    left: -4.5rem;
}
.top--5 {
    top: -3rem;
}
.right--5 {
    right: -3rem;
}
.bottom--5 {
    bottom: -3rem;
}
.left--5 {
    left: -3rem;
}
.top--4 {
    top: -1.5rem;
}
.right--4 {
    right: -1.5rem;
}
.bottom--4 {
    bottom: -1.5rem;
}
.left--4 {
    left: -1.5rem;
}
.top--3 {
    top: -1rem;
}
.right--3 {
    right: -1rem;
}
.bottom--3 {
    bottom: -1rem;
}
.left--3 {
    left: -1rem;
}
.top--2 {
    top: -0.5rem;
}
.right--2 {
    right: -0.5rem;
}
.bottom--2 {
    bottom: -0.5rem;
}
.left--2 {
    left: -0.5rem;
}
.top--1 {
    top: -0.25rem;
}
.right--1 {
    right: -0.25rem;
}
.bottom--1 {
    bottom: -0.25rem;
}
.left--1 {
    left: -0.25rem;
}
.top-6 {
    top: 4.5rem;
}
.right-6 {
    right: 4.5rem;
}
.bottom-6 {
    bottom: 4.5rem;
}
.left-6 {
    left: 4.5rem;
}
.top-7 {
    top: 6rem;
}
.right-7 {
    right: 6rem;
}
.bottom-7 {
    bottom: 6rem;
}
.left-7 {
    left: 6rem;
}
.top-8 {
    top: 8rem;
}
.right-8 {
    right: 8rem;
}
.bottom-8 {
    bottom: 8rem;
}
.left-8 {
    left: 8rem;
}
.top-9 {
    top: 10rem;
}
.right-9 {
    right: 10rem;
}
.bottom-9 {
    bottom: 10rem;
}
.left-9 {
    left: 10rem;
}
.center {
    left: 50%;
    transform: translateX(-50%);
}
[class*="shadow"] {
    transition: all 0.15s ease;
}
.shadow-sm--hover:hover {
    box-shadow: 0 0 0.5rem rgba(136, 152, 170, 0.075) !important;
}
.shadow--hover:hover {
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
}
.shadow-lg--hover:hover {
    box-shadow: 0 0 3rem rgba(136, 152, 170, 0.175) !important;
}
.shadow-none--hover:hover {
    box-shadow: none !important;
}
.h-100vh {
    height: 100vh !important;
}
.row.row-grid > [class*="col-"] + [class*="col-"] {
    margin-top: 3rem;
}
@media (min-width: 992px) {
    .row.row-grid > [class*="col-lg-"] + [class*="col-lg-"] {
        margin-top: 0;
    }
}
@media (min-width: 768px) {
    .row.row-grid > [class*="col-md-"] + [class*="col-md-"] {
        margin-top: 0;
    }
}
@media (min-width: 576px) {
    .row.row-grid > [class*="col-sm-"] + [class*="col-sm-"] {
        margin-top: 0;
    }
}
.row-grid + .row-grid {
    margin-top: 3rem;
}
@media (min-width: 992px) {
    .mt--100 {
        margin-top: -100px !important;
    }
    .mr--100 {
        margin-right: -100px !important;
    }
    .mb--100 {
        margin-bottom: -100px !important;
    }
    .ml--100 {
        margin-left: -100px !important;
    }
    .mt--150 {
        margin-top: -150px !important;
    }
    .mb--150 {
        margin-bottom: -150px !important;
    }
    .mt--200 {
        margin-top: -200px !important;
    }
    .mb--200 {
        margin-bottom: -200px !important;
    }
    .mt--300 {
        margin-top: -300px !important;
    }
    .mb--300 {
        margin-bottom: -300px !important;
    }
    .pt-100 {
        padding-top: 100px !important;
    }
    .pb-100 {
        padding-bottom: 100px !important;
    }
    .pt-150 {
        padding-top: 150px !important;
    }
    .pb-150 {
        padding-bottom: 150px !important;
    }
    .pt-200 {
        padding-top: 200px !important;
    }
    .pb-200 {
        padding-bottom: 200px !important;
    }
    .pt-250 {
        padding-top: 250px !important;
    }
    .pb-250 {
        padding-bottom: 250px !important;
    }
    .pt-300 {
        padding-top: 300px !important;
    }
    .pb-300 {
        padding-bottom: 300px !important;
    }
}
.font-weight-300 {
    font-weight: 300 !important;
}
.font-weight-400 {
    font-weight: 400 !important;
}
.font-weight-500 {
    font-weight: 500 !important;
}
.font-weight-600 {
    font-weight: 600 !important;
}
.font-weight-700 {
    font-weight: 700 !important;
}
.font-weight-800 {
    font-weight: 800 !important;
}
.font-weight-900 {
    font-weight: 900 !important;
}
.text-underline {
    text-decoration: underline;
}
.text-through {
    text-decoration: line-through;
}
.text-xs {
    font-size: 0.75rem !important;
}
.text-sm {
    font-size: 0.875rem !important;
}
.text-lg {
    font-size: 1.25rem !important;
}
.text-xl {
    font-size: 1.5rem !important;
}
.lh-100 {
    line-height: 1;
}
.lh-110 {
    line-height: 1.1;
}
.lh-120 {
    line-height: 1.2;
}
.lh-130 {
    line-height: 1.3;
}
.lh-140 {
    line-height: 1.4;
}
.lh-150 {
    line-height: 1.5;
}
.lh-160 {
    line-height: 1.6;
}
.lh-170 {
    line-height: 1.7;
}
.lh-180 {
    line-height: 1.8;
}
.ls-1 {
    letter-spacing: 0.0625rem;
}
.ls-15 {
    letter-spacing: 0.09375rem;
}
.ls-2 {
    letter-spacing: 0.125rem;
}
.text-blue {
    color: var(--bs-primary) !important;
}
a.text-blue:focus,
a.text-blue:hover {
    color: #233dd2 !important;
}
.text-indigo {
    color: #5603ad !important;
}
a.text-indigo:focus,
a.text-indigo:hover {
    color: #310262 !important;
}
.text-purple {
    color: #8965e0 !important;
}
a.text-purple:focus,
a.text-purple:hover {
    color: #5a2acf !important;
}
.text-pink {
    color: #f3a4b5 !important;
}
a.text-pink:focus,
a.text-pink:hover {
    color: #ea607e !important;
}
.text-red {
    color: var(--bs-danger) !important;
}
a.text-red:focus,
a.text-red:hover {
    color: #d40b33 !important;
}
.text-orange {
    color: var(--bs-warning) !important;
}
a.text-orange:focus,
a.text-orange:hover {
    color: #ea3005 !important;
}
.text-yellow {
    color: #ffd600 !important;
}
a.text-yellow:focus,
a.text-yellow:hover {
    color: #b39600 !important;
}
.text-green {
    color: var(--bs-success) !important;
}
a.text-green:focus,
a.text-green:hover {
    color: #1f8f5f !important;
}
.text-teal {
    color: var(--bs-info) !important;
}
a.text-teal:focus,
a.text-teal:hover {
    color: #0b90a8 !important;
}
.text-cyan {
    color: #2bffc6 !important;
}
a.text-cyan:focus,
a.text-cyan:hover {
    color: #00dea2 !important;
}
.text-white {
    color: #fff !important;
}
a.text-white:focus,
a.text-white:hover {
    color: #d9d9d9 !important;
}
.text-gray {
    color: #8898aa !important;
}
a.text-gray:focus,
a.text-gray:hover {
    color: #607286 !important;
}
.text-gray-dark {
    color: #32325d !important;
}
a.text-gray-dark:focus,
a.text-gray-dark:hover {
    color: #17172b !important;
}
.text-light {
    color: var(--bs-light) !important;
}
a.text-light:focus,
a.text-light:hover {
    color: #a2aeb9 !important;
}
.text-lighter {
    color: #e9ecef !important;
}
a.text-lighter:focus,
a.text-lighter:hover {
    color: #bdc6cf !important;
}
@media (min-width: 992px) {
    .transform-perspective-right {
        transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);
    }
    .transform-perspective-left {
        transform: scale(1) perspective(2000px) rotateY(11deg) rotateX(2deg) rotate(-2deg);
    }
}
.datepicker {
    border-radius: 0.375rem;
    direction: ltr;
}
.datepicker-inline {
    width: 220px;
}
.datepicker-rtl {
    direction: rtl;
}
.datepicker-rtl.dropdown-menu {
    left: auto;
}
.datepicker-rtl table tr td span {
    float: right;
}
.datepicker-dropdown {
    top: 0;
    left: 0;
    padding: 20px 22px;
    box-shadow: 0 50px 100px rgba(50, 50, 93, 0.1), 0 15px 35px rgba(50, 50, 93, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
}
.datepicker-dropdown.datepicker-orient-left:before {
    left: 6px;
}
.datepicker-dropdown.datepicker-orient-left:after {
    left: 7px;
}
.datepicker-dropdown.datepicker-orient-right:before {
    right: 6px;
}
.datepicker-dropdown.datepicker-orient-right:after {
    right: 7px;
}
.datepicker-dropdown.datepicker-orient-bottom:before {
    top: -7px;
}
.datepicker-dropdown.datepicker-orient-bottom:after {
    top: -6px;
}
.datepicker-dropdown.datepicker-orient-top:before {
    bottom: -7px;
    border-top: 7px solid #fff;
    border-bottom: 0;
}
.datepicker-dropdown.datepicker-orient-top:after {
    bottom: -6px;
    border-top: 6px solid #fff;
    border-bottom: 0;
}
.datepicker table {
    margin: 0;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
}
.datepicker table tr td {
    border-radius: 50%;
}
.datepicker table tr th {
    font-weight: 500;
    border-radius: 0.375rem;
}
.datepicker table tr td,
.datepicker table tr th {
    font-size: 0.875rem;
    width: 36px;
    height: 36px;
    transition: all 0.15s ease;
    text-align: center;
    border: none;
}
.table-striped .datepicker table tr td,
.table-striped .datepicker table tr th {
    background-color: transparent;
}
.datepicker table tr td.new,
.datepicker table tr td.old {
    color: #adb5bd;
}
.datepicker table tr td.day:hover,
.datepicker table tr td.focused {
    cursor: pointer;
    background: #fff;
}
.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover {
    cursor: default;
    color: #dee2e6;
    background: 0 0;
}
.datepicker table tr td.highlighted {
    border-radius: 0;
}
.datepicker table tr td.highlighted.focused {
    background: var(--bs-primary);
}
.datepicker table tr td.highlighted.disabled,
.datepicker table tr td.highlighted.disabled:active {
    color: #ced4da;
    background: var(--bs-primary);
}
.datepicker table tr td.today {
    background: #fff;
}
.datepicker table tr td.today.focused {
    background: #fff;
}
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:active {
    color: #8898aa;
    background: #fff;
}
.datepicker table tr td.range {
    color: #fff;
    border-radius: 0;
    background: var(--bs-primary);
}
.datepicker table tr td.range.focused {
    background: #3b53de;
}
.datepicker table tr td.range.day.disabled:hover,
.datepicker table tr td.range.disabled,
.datepicker table tr td.range.disabled:active {
    color: #8a98eb;
    background: #324cdd;
}
.datepicker table tr td.range.highlighted.focused {
    background: #cbd3da;
}
.datepicker table tr td.range.highlighted.disabled,
.datepicker table tr td.range.highlighted.disabled:active {
    color: #dee2e6;
    background: #e9ecef;
}
.datepicker table tr td.range.today.disabled,
.datepicker table tr td.range.today.disabled:active {
    color: #fff;
    background: var(--bs-primary);
}
.datepicker table tr td.day.range-start {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.datepicker table tr td.day.range-end {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.datepicker table tr td.day.range-start.range-end {
    border-radius: 50%;
}
.datepicker table tr td.day.range:hover,
.datepicker table tr td.selected,
.datepicker table tr td.selected.highlighted,
.datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.selected:hover {
    color: #fff;
    background: var(--bs-primary);
}
.datepicker table tr td.active,
.datepicker table tr td.active.highlighted,
.datepicker table tr td.active.highlighted:hover,
.datepicker table tr td.active:hover {
    color: #fff;
    background: var(--bs-primary);
    box-shadow: none;
}
.datepicker table tr td span {
    line-height: 54px;
    display: block;
    float: left;
    width: 23%;
    height: 54px;
    margin: 1%;
    cursor: pointer;
    border-radius: 4px;
}
.datepicker table tr td span.focused,
.datepicker table tr td span:hover {
    background: #e9ecef;
}
.datepicker table tr td span.disabled,
.datepicker table tr td span.disabled:hover {
    cursor: default;
    color: #dee2e6;
    background: 0 0;
}
.datepicker table tr td span.active,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover,
.datepicker table tr td span.active:hover {
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.datepicker table tr td span.new,
.datepicker table tr td span.old {
    color: #8898aa;
}
.datepicker .datepicker-switch {
    width: 145px;
}
.datepicker .datepicker-switch,
.datepicker .next,
.datepicker .prev,
.datepicker tfoot tr th {
    cursor: pointer;
}
.datepicker .datepicker-switch:hover,
.datepicker .next:hover,
.datepicker .prev:hover,
.datepicker tfoot tr th:hover {
    background: #e9ecef;
}
.datepicker .next.disabled,
.datepicker .prev.disabled {
    visibility: hidden;
}
.datepicker .cw {
    font-size: 10px;
    width: 12px;
    padding: 0 2px 0 5px;
    vertical-align: middle;
}
.bootstrap-tagsinput {
    display: inline-block;
    max-width: 100%;
    padding: 0.25rem;
    cursor: text;
    vertical-align: middle;
    color: #8898aa;
    border: 0 solid transparent;
    border-radius: 0.25rem;
    background-color: #fff;
}
.bootstrap-tagsinput input {
    width: auto;
    max-width: inherit;
    margin: 0;
    padding: 0 6px;
    border: none;
    outline: 0;
    background-color: transparent;
    box-shadow: none;
}
.bootstrap-tagsinput input::-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
}
.bootstrap-tagsinput input::placeholder {
    opacity: 1;
    color: #adb5bd;
}
.bootstrap-tagsinput input:focus {
    border: none;
    box-shadow: none;
}
.bootstrap-tagsinput .badge {
    line-height: 1.5;
    position: relative;
    margin: 0.125rem;
    padding: 0.625rem 0.625rem 0.5rem;
    transition: all 0.15s ease;
    color: #fff;
    border-radius: 0.25rem;
    background: #172b4d;
    box-shadow: 0 1px 2px rgba(68, 68, 68, 0.25);
}
@media (prefers-reduced-motion: reduce) {
    .bootstrap-tagsinput .badge {
        transition: none;
    }
}
.bootstrap-tagsinput .badge:hover {
    padding-right: 1.5rem;
}
.bootstrap-tagsinput [data-role="remove"] {
    position: absolute;
    top: 50%;
    margin-left: 10px;
    cursor: pointer;
    transform: translate(0, -50%);
    color: #fff;
}
.bootstrap-tagsinput [data-role="remove"]:after {
    font-size: 16px;
    content: "×";
}
#chartjs-tooltip {
    position: absolute;
    transition: all 0.1s ease;
    transform: translate(-50%, 0);
    pointer-events: none;
    opacity: 1;
    color: #fff;
    border-radius: 3px;
    background: rgba(0, 0, 0, 0.7);
}
.chartjs-tooltip-key {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin-right: 10px;
}
.dropzone {
    position: relative;
    display: flex;
    flex-direction: column;
}
.dz-message {
    z-index: 999;
    padding: 5rem 1rem;
    cursor: pointer;
    transition: all 0.15s ease;
    text-align: center;
    color: #8898aa;
    border: 1px dashed #dee2e6;
    border-radius: 0.375rem;
    background-color: #fff;
    order: -1;
}
.dz-message:hover {
    color: var(--bs-body-color);
    border-color: #8898aa;
}
.dz-drag-hover .dz-message {
    color: var(--bs-primary);
    border-color: var(--bs-primary);
}
.dropzone-multiple .dz-message {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.dropzone-single.dz-max-files-reached .dz-message {
    opacity: 0;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.9);
}
.dropzone-single.dz-max-files-reached .dz-message:hover {
    opacity: 1;
}
.dz-preview-single {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 0.375rem;
}
.dz-preview-cover {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 0.375rem;
}
.dz-preview-img {
    width: 100%;
    height: 100%;
    border-radius: 0.375rem;
    -o-object-fit: cover;
    object-fit: cover;
}
.dz-preview-multiple .list-group-item:last-child {
    padding-bottom: 0;
    border-bottom: 0;
}
[data-dz-size] strong {
    font-weight: 400;
}
.vector-map {
    position: relative;
    height: 600px;
}
.vector-map-sm {
    height: 280px;
}
.jvectormap-container {
    width: 100%;
    height: 100%;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
    position: absolute;
    bottom: 0;
    left: 0;
}
.jvectormap-zoomin {
    bottom: 4.25rem;
}
.jvectormap-zoomout {
    bottom: 2rem;
} /*!
 * Lavalamp
 * http://lavalamp.magicmediamuse.com/
 */
.lavalamp {
    position: relative;
}
.lavalamp-item {
    position: relative;
    z-index: 5;
}
.lavalamp-object {
    position: absolute;
    top: 0;
    left: 0;
}
.lavalamp .lavalamp-object {
    transition-property: transform, width, height;
}
.lavalamp .lavalamp-object.ease {
    transition-timing-function: ease;
}
.lavalamp .lavalamp-object.ease-in {
    transition-timing-function: ease-in;
}
.lavalamp .lavalamp-object.ease-out {
    transition-timing-function: ease-out;
}
.lavalamp .lavalamp-object.ease-in-out {
    transition-timing-function: ease-in-out;
}
.lavalamp .lavalamp-object.linear {
    transition-timing-function: linear;
}
.lavalamp .lavalamp-object.easeInQuad {
    transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
}
.lavalamp .lavalamp-object.easeInCubic {
    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.lavalamp .lavalamp-object.easeInQuart {
    transition-timing-function: cubic-bezier(0.895, 0.03, 0.685, 0.22);
}
.lavalamp .lavalamp-object.easeInQuint {
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
}
.lavalamp .lavalamp-object.easeInSine {
    transition-timing-function: cubic-bezier(0.47, 0, 0.745, 0.715);
}
.lavalamp .lavalamp-object.easeInExpo {
    transition-timing-function: cubic-bezier(0.95, 0.05, 0.795, 0.035);
}
.lavalamp .lavalamp-object.easeInCirc {
    transition-timing-function: cubic-bezier(0.6, 0.04, 0.98, 0.335);
}
.lavalamp .lavalamp-object.easeInBack {
    transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045);
}
.lavalamp .lavalamp-object.easeOutQuad {
    transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.lavalamp .lavalamp-object.easeOutCubic {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}
.lavalamp .lavalamp-object.easeOutQuart {
    transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}
.lavalamp .lavalamp-object.easeOutQuint {
    transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.lavalamp .lavalamp-object.easeOutSine {
    transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
}
.lavalamp .lavalamp-object.easeOutExpo {
    transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
}
.lavalamp .lavalamp-object.easeOutCirc {
    transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
}
.lavalamp .lavalamp-object.easeOutBack {
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.lavalamp .lavalamp-object.easeInOutQuad {
    transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
.lavalamp .lavalamp-object.easeInOutCubic {
    transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);
}
.lavalamp .lavalamp-object.easeInOutQuart {
    transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);
}
.lavalamp .lavalamp-object.easeInOutQuint {
    transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
}
.lavalamp .lavalamp-object.easeInOutSine {
    transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
.lavalamp .lavalamp-object.easeInOutExpo {
    transition-timing-function: cubic-bezier(1, 0, 0, 1);
}
.lavalamp .lavalamp-object.easeInOutCirc {
    transition-timing-function: cubic-bezier(0.785, 0.135, 0.15, 0.86);
}
.lavalamp .lavalamp-object.easeInOutBack {
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.noUi-target,
.noUi-target * {
    box-sizing: border-box;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: transparent;
    touch-action: none;
}
.noUi-target {
    position: relative;
    direction: ltr;
}
.noUi-base,
.noUi-connects {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
}
.noUi-connects {
    z-index: 0;
    overflow: hidden;
}
.noUi-connect,
.noUi-origin {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-origin: 0 0;
    will-change: transform;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-origin {
    right: 0;
    left: auto;
}
.noUi-vertical .noUi-origin {
    width: 0;
}
.noUi-horizontal .noUi-origin {
    height: 0;
}
.noUi-handle {
    position: absolute;
}
.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin {
    transition: transform 0.3s;
}
.noUi-state-drag * {
    cursor: inherit !important;
}
.noUi-horizontal {
    height: 5px;
}
.noUi-horizontal .noUi-handle {
    top: -6px;
    left: -17px;
    width: 34px;
    height: 28px;
}
.noUi-vertical {
    width: 5px;
}
.noUi-vertical .noUi-handle {
    top: -17px;
    left: -6px;
    width: 28px;
    height: 34px;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
    right: -17px;
    left: auto;
}
.noUi-connects {
    border-radius: 3px;
}
.noUi-connect {
    background: var(--bs-primary);
}
.noUi-draggable {
    cursor: ew-resize;
}
.noUi-vertical .noUi-draggable {
    cursor: ns-resize;
}
.noUi-handle {
    cursor: default;
    border: 1px solid #d9d9d9;
    border-radius: 3px;
    outline: 0;
    background: #fff;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
}
.noUi-active {
    outline: 0;
}
[disabled] .noUi-connect {
    background: #b8b8b8;
}
[disabled] .noUi-handle,
[disabled].noUi-handle,
[disabled].noUi-target {
    cursor: not-allowed;
}
.noUi-pips,
.noUi-pips * {
    box-sizing: border-box;
}
.noUi-pips {
    position: absolute;
    color: #999;
}
.noUi-value {
    position: absolute;
    text-align: center;
    white-space: nowrap;
}
.noUi-value-sub {
    font-size: 10px;
    color: #ccc;
}
.noUi-marker {
    position: absolute;
    background: #ccc;
}
.noUi-marker-sub {
    background: #aaa;
}
.noUi-marker-large {
    background: #aaa;
}
.noUi-pips-horizontal {
    top: 100%;
    left: 0;
    width: 100%;
    height: 80px;
    padding: 10px 0;
}
.noUi-value-horizontal {
    transform: translate(-50%, 50%);
}
.noUi-rtl .noUi-value-horizontal {
    transform: translate(50%, 50%);
}
.noUi-marker-horizontal.noUi-marker {
    width: 2px;
    height: 5px;
    margin-left: -1px;
}
.noUi-marker-horizontal.noUi-marker-sub {
    height: 10px;
}
.noUi-marker-horizontal.noUi-marker-large {
    height: 15px;
}
.noUi-pips-vertical {
    top: 0;
    left: 100%;
    height: 100%;
    padding: 0 10px;
}
.noUi-value-vertical {
    padding-left: 25px;
    transform: translate(0, -50%, 0);
}
.noUi-rtl .noUi-value-vertical {
    transform: translate(0, 50%);
}
.noUi-marker-vertical.noUi-marker {
    width: 5px;
    height: 2px;
    margin-top: -1px;
}
.noUi-marker-vertical.noUi-marker-sub {
    width: 10px;
}
.noUi-marker-vertical.noUi-marker-large {
    width: 15px;
}
.noUi-tooltip {
    position: absolute;
    display: block;
    padding: 5px;
    text-align: center;
    white-space: nowrap;
    color: #000;
    border: 1px solid #d9d9d9;
    border-radius: 3px;
    background: #fff;
}
.noUi-horizontal .noUi-tooltip {
    bottom: 120%;
    left: 50%;
    transform: translate(-50%, 0);
}
.noUi-vertical .noUi-tooltip {
    top: 50%;
    right: 120%;
    transform: translate(0, -50%);
}
.noUi-target {
    margin: 15px 0;
    cursor: pointer;
    border: 0;
    border-radius: 5px;
    background: #eceeef;
    box-shadow: inset 0 1px 2px rgba(90, 97, 105, 0.1);
}
.noUi-horizontal {
    height: 5px;
}
html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
    right: -10px;
}
.noUi-vertical {
    width: 5px;
}
.noUi-connect {
    background: var(--bs-primary);
    box-shadow: none;
}
.noUi-horizontal .noUi-handle,
.noUi-vertical .noUi-handle {
    top: -5px;
    width: 15px;
    height: 15px;
    cursor: pointer;
    transition: box-shadow 0.15s, transform 0.15s;
    border: 0;
    border-radius: 100%;
    background-color: var(--bs-primary);
    box-shadow: none;
}
.noUi-horizontal .noUi-handle.noUi-active,
.noUi-vertical .noUi-handle.noUi-active {
    box-shadow: 0 0 0 2px var(--bs-primary);
}
.input-slider--cyan .noUi-connect {
    background: #2bffc6;
}
[disabled] .noUi-connect,
[disabled].noUi-connect {
    background: #b2b2b2;
}
[disabled] .noUi-handle,
[disabled].noUi-origin {
    cursor: not-allowed;
}
.range-slider-value {
    font-size: 0.75rem;
    font-weight: 500;
    padding: 0.4em 0.8em 0.3em 0.85em;
    color: #fff;
    border-radius: 10px;
    background-color: rgba(33, 37, 41, 0.7);
}
.range-slider-wrapper .upper-info {
    font-weight: 400;
    margin-bottom: 5px;
}
.input-slider-value-output {
    font-size: 11px;
    position: relative;
    top: 12px;
    padding: 4px 8px;
    color: #fff;
    border-radius: 2px;
    background: #333;
}
.input-slider-value-output:after {
    position: absolute;
    bottom: 100%;
    left: 10px;
    width: 0;
    height: 0;
    margin-left: -4px;
    content: " ";
    pointer-events: none;
    border: solid transparent;
    border-width: 4px;
    border-color: rgba(136, 183, 213, 0);
    border-bottom-color: #333;
}
.input-slider-value-output.left:after {
    right: auto;
    left: 10px;
}
.input-slider-value-output.right:after {
    right: 10px;
    left: auto;
}
.ql-container {
    font-family: Open Sans, sans-serif;
}
.ql-toolbar {
    position: relative;
    padding: 0.625rem 0.75rem;
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem 0.25rem 0 0;
    background-color: #fff;
}
.ql-toolbar + .ql-container {
    margin-top: -1px;
}
.ql-toolbar + .ql-container .ql-editor {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.ql-editor {
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    width: 100%;
    min-height: 6rem;
    padding: 0.625rem 0.75rem;
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
@media (prefers-reduced-motion: reduce) {
    .ql-editor {
        transition: none;
    }
}
.ql-editor::-ms-expand {
    border: 0;
    background-color: transparent;
}
.ql-editor:focus {
    color: #8898aa;
    border-color: var(--bs-primary);
    outline: 0;
    background-color: #fff;
    box-shadow: 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.ql-editor:focus {
    border-color: #dee2e6;
}
.ql-hidden {
    position: absolute;
    transform: scale(0);
}
.ql-editor.ql-blank::before {
    font-style: normal;
    top: 0.625rem;
    left: 0.75rem;
    color: #adb5bd;
}
.ql-editor:focus::before {
    display: none;
}
.ql-formats {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}
.ql-formats:first-child {
    padding-left: 0;
}
.ql-formats:last-child {
    padding-right: 0;
}
.ql-toolbar button {
    padding: 0 0.25rem;
    cursor: pointer;
    transition: all 0.15s ease;
    color: var(--bs-body-color);
    border: none;
    background: 0 0;
}
.ql-toolbar button:hover {
    color: var(--bs-primary);
}
.ql-toolbar button:first-child {
    margin-left: -0.25rem;
}
.ql-toolbar .ql-active {
    color: var(--bs-primary);
}
.ql-toolbar button svg {
    width: 1.25rem;
    height: 1.25rem;
}
.ql-toolbar .ql-stroke {
    stroke: currentColor;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
}
.ql-toolbar .ql-thin {
    stroke-width: 1;
}
.ql-toolbar .ql-fill {
    fill: currentColor;
}
.ql-toolbar input.ql-image {
    position: absolute;
    transform: scale(0);
}
.ql-tooltip {
    position: absolute;
    display: flex;
    width: 18.5rem;
    margin-top: 0.6rem;
    padding: 0.625rem 0.75rem;
    border: 1px solid rgba(0, 0, 0, 0.05);
    border-radius: 0.4375rem;
    background-color: #fff;
    box-shadow: 0 0.5rem 2rem 0 rgba(0, 0, 0, 0.2);
    flex-wrap: nowrap;
}
.ql-tooltip:after,
.ql-tooltip:before {
    position: absolute;
    bottom: 100%;
    left: 50%;
    content: "";
    transform: translateX(-50%);
}
.ql-tooltip:before {
    border-right: 0.6rem solid transparent;
    border-bottom: 0.6rem solid rgba(0, 0, 0, 0.05);
    border-left: 0.6rem solid transparent;
}
.ql-tooltip:after {
    border-right: 0.5rem solid transparent;
    border-bottom: 0.5rem solid #fff;
    border-left: 0.5rem solid transparent;
}
.ql-container .ql-tooltip:hover {
    display: flex !important;
}
.ql-tooltip .ql-preview {
    font-size: 0.875rem;
    line-height: 1.5;
    width: 100%;
    padding: 0.25rem 0.5rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border-radius: 0.25rem;
}
@media (prefers-reduced-motion: reduce) {
    .ql-tooltip .ql-preview {
        transition: none;
    }
}
.ql-tooltip.ql-editing .ql-preview {
    display: none;
}
.ql-tooltip input {
    font-size: 0.875rem;
    line-height: 1.5;
    display: none;
    width: 100%;
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    color: #8898aa;
    border: none;
    background-color: transparent;
}
.ql-tooltip input:focus {
    outline: 0;
}
.ql-tooltip.ql-editing input {
    display: block;
}
.ql-tooltip .ql-action,
.ql-tooltip .ql-remove {
    margin-left: 0.25rem;
}
.ql-tooltip .ql-action::before,
.ql-tooltip .ql-remove::before {
    font-size: 0.875rem;
    font-weight: 600;
    line-height: 1.5;
    display: inline-block;
    padding: 0.25rem 0.5rem;
    cursor: pointer;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
@media (prefers-reduced-motion: reduce) {
    .ql-tooltip .ql-action::before,
    .ql-tooltip .ql-remove::before {
        transition: none;
    }
}
.ql-tooltip .ql-action::before:focus,
.ql-tooltip .ql-action::before:hover,
.ql-tooltip .ql-remove::before:focus,
.ql-tooltip .ql-remove::before:hover {
    text-decoration: none;
}
.ql-tooltip .ql-action::before.focus,
.ql-tooltip .ql-action::before:focus,
.ql-tooltip .ql-remove::before.focus,
.ql-tooltip .ql-remove::before:focus {
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
}
.ql-tooltip .ql-action::before,
.ql-tooltip.ql-editing .ql-action::before {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.ql-tooltip .ql-action::before:hover,
.ql-tooltip.ql-editing .ql-action::before:hover {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.ql-tooltip .ql-action::before.focus,
.ql-tooltip .ql-action::before:focus,
.ql-tooltip.ql-editing .ql-action::before.focus,
.ql-tooltip.ql-editing .ql-action::before:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.ql-tooltip .ql-action::before.disabled,
.ql-tooltip .ql-action::before:disabled,
.ql-tooltip.ql-editing .ql-action::before.disabled,
.ql-tooltip.ql-editing .ql-action::before:disabled {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: var(--bs-primary);
}
.ql-tooltip .ql-action::before:not(:disabled):not(.disabled).active,
.ql-tooltip .ql-action::before:not(:disabled):not(.disabled):active,
.ql-tooltip.ql-editing .ql-action::before:not(:disabled):not(.disabled).active,
.ql-tooltip.ql-editing .ql-action::before:not(:disabled):not(.disabled):active,
.show > .ql-tooltip .ql-action::before.dropdown-toggle,
.show > .ql-tooltip.ql-editing .ql-action::before.dropdown-toggle {
    color: #fff;
    border-color: var(--bs-primary);
    background-color: #324cdd;
}
.ql-tooltip .ql-action::before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip .ql-action::before:not(:disabled):not(.disabled):active:focus,
.ql-tooltip.ql-editing .ql-action::before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip.ql-editing .ql-action::before:not(:disabled):not(.disabled):active:focus,
.show > .ql-tooltip .ql-action::before.dropdown-toggle:focus,
.show > .ql-tooltip.ql-editing .ql-action::before.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(94, 114, 228, 0.5);
}
.ql-tooltip .ql-action::before {
    content: "Edit";
}
.ql-tooltip.ql-editing .ql-action::before {
    content: "Save";
}
.ql-tooltip .ql-remove::before {
    content: "Remove";
    color: #212529;
    border-color: #fff;
    border-color: #dee2e6;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.ql-tooltip .ql-remove::before:hover {
    color: #212529;
    border-color: #fff;
    background-color: #fff;
}
.ql-tooltip .ql-remove::before.focus,
.ql-tooltip .ql-remove::before:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08), 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.ql-tooltip .ql-remove::before.disabled,
.ql-tooltip .ql-remove::before:disabled {
    color: #212529;
    border-color: #fff;
    background-color: #fff;
}
.ql-tooltip .ql-remove::before:not(:disabled):not(.disabled).active,
.ql-tooltip .ql-remove::before:not(:disabled):not(.disabled):active,
.show > .ql-tooltip .ql-remove::before.dropdown-toggle {
    color: #212529;
    border-color: #fff;
    background-color: #e6e6e6;
}
.ql-tooltip .ql-remove::before:not(:disabled):not(.disabled).active:focus,
.ql-tooltip .ql-remove::before:not(:disabled):not(.disabled):active:focus,
.show > .ql-tooltip .ql-remove::before.dropdown-toggle:focus {
    box-shadow: none, 0 0 0 0 rgba(255, 255, 255, 0.5);
}
.ql-tooltip.ql-editing .ql-remove::before {
    display: none;
}
.ql-editor blockquote {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}
.ql-editor img {
    max-width: 100%;
    height: auto;
}
.scroll-wrapper {
    position: relative;
    overflow: hidden !important;
    padding: 0 !important;
}
.scroll-wrapper > .scroll-content {
    position: relative !important;
    top: 0;
    left: 0;
    overflow: scroll !important;
    box-sizing: content-box !important;
    width: auto !important;
    max-width: none !important;
    height: auto;
    max-height: none;
    margin: 0;
    padding: 0;
    border: none !important;
}
.scroll-wrapper > .scroll-content::-webkit-scrollbar {
    width: 0;
    height: 0;
}
.scroll-wrapper.scroll--rtl {
    direction: rtl;
}
.scroll-element {
    display: none;
    box-sizing: content-box;
}
.scroll-element div {
    box-sizing: content-box;
}
.scroll-element .scroll-arrow,
.scroll-element .scroll-bar {
    cursor: default;
}
.scroll-element.scroll-x.scroll-scrollx_visible,
.scroll-element.scroll-y.scroll-scrolly_visible {
    display: block;
}
.scroll-textarea {
    border: 1px solid #ccc;
    border-top-color: #999;
}
.scroll-textarea > .scroll-content {
    overflow: hidden !important;
}
.scroll-textarea > .scroll-content > textarea {
    position: relative !important;
    top: 0;
    overflow: scroll !important;
    box-sizing: border-box;
    width: 100% !important;
    max-width: none !important;
    height: 100% !important;
    max-height: none !important;
    margin: 0;
    padding: 2px;
    border: none !important;
    outline: 0;
}
.scroll-textarea > .scroll-content > textarea::-webkit-scrollbar {
    width: 0;
    height: 0;
}
.scrollbar-inner > .scroll-element,
.scrollbar-inner > .scroll-element div {
    position: absolute;
    z-index: 10;
    margin: 0;
    padding: 0;
    border: none;
}
.scrollbar-inner > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-inner > .scroll-element.scroll-x {
    bottom: 2px;
    left: 0;
    width: 100%;
    height: 8px;
}
.scrollbar-inner > .scroll-element.scroll-y {
    top: 0;
    right: 2px;
    width: 8px;
    height: 100%;
}
.scrollbar-inner > .scroll-element .scroll-element_outer {
    overflow: hidden;
}
.scrollbar-inner > .scroll-element .scroll-bar,
.scrollbar-inner > .scroll-element .scroll-element_outer,
.scrollbar-inner > .scroll-element .scroll-element_track {
    border-radius: 8px;
}
.scrollbar-inner > .scroll-element .scroll-bar,
.scrollbar-inner > .scroll-element .scroll-element_track {
    opacity: 0.4;
}
.scrollbar-inner > .scroll-element .scroll-element_track {
    background-color: #e0e0e0;
}
.scrollbar-inner > .scroll-element .scroll-bar {
    background-color: #c2c2c2;
}
.scrollbar-inner > .scroll-element:hover .scroll-bar {
    background-color: #919191;
}
.scrollbar-inner > .scroll-element.scroll-draggable .scroll-bar {
    background-color: #919191;
}
.scrollbar-inner > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track {
    left: -12px;
}
.scrollbar-inner > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track {
    top: -12px;
}
.scrollbar-inner > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -12px;
}
.scrollbar-inner > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -12px;
}
.scrollbar-outer > .scroll-element,
.scrollbar-outer > .scroll-element div {
    position: absolute;
    z-index: 10;
    margin: 0;
    padding: 0;
    border: none;
}
.scrollbar-outer > .scroll-element {
    background-color: #fff;
}
.scrollbar-outer > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-outer > .scroll-element.scroll-x {
    bottom: 0;
    left: 0;
    width: 100%;
    height: 12px;
}
.scrollbar-outer > .scroll-element.scroll-y {
    top: 0;
    right: 0;
    width: 12px;
    height: 100%;
}
.scrollbar-outer > .scroll-element.scroll-x .scroll-element_outer {
    top: 2px;
    height: 8px;
}
.scrollbar-outer > .scroll-element.scroll-y .scroll-element_outer {
    left: 2px;
    width: 8px;
}
.scrollbar-outer > .scroll-element .scroll-element_outer {
    overflow: hidden;
}
.scrollbar-outer > .scroll-element .scroll-element_track {
    background-color: #eee;
}
.scrollbar-outer > .scroll-element .scroll-bar,
.scrollbar-outer > .scroll-element .scroll-element_outer,
.scrollbar-outer > .scroll-element .scroll-element_track {
    border-radius: 8px;
}
.scrollbar-outer > .scroll-element .scroll-bar {
    background-color: #d9d9d9;
}
.scrollbar-outer > .scroll-element .scroll-bar:hover {
    background-color: #c2c2c2;
}
.scrollbar-outer > .scroll-element.scroll-draggable .scroll-bar {
    background-color: #919191;
}
.scrollbar-outer > .scroll-content.scroll-scrolly_visible {
    left: -12px;
    margin-left: 12px;
}
.scrollbar-outer > .scroll-content.scroll-scrollx_visible {
    top: -12px;
    margin-top: 12px;
}
.scrollbar-outer > .scroll-element.scroll-x .scroll-bar {
    min-width: 10px;
}
.scrollbar-outer > .scroll-element.scroll-y .scroll-bar {
    min-height: 10px;
}
.scrollbar-outer > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track {
    left: -14px;
}
.scrollbar-outer > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track {
    top: -14px;
}
.scrollbar-outer > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -14px;
}
.scrollbar-outer > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -14px;
}
.scrollbar-macosx > .scroll-element,
.scrollbar-macosx > .scroll-element div {
    position: absolute;
    z-index: 10;
    margin: 0;
    padding: 0;
    border: none;
    background: 0 0;
}
.scrollbar-macosx > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-macosx > .scroll-element .scroll-element_track {
    display: none;
}
.scrollbar-macosx > .scroll-element .scroll-bar {
    display: block;
    transition: opacity 0.2s linear;
    opacity: 0;
    border-radius: 7px;
    background-color: #6c6e71;
}
.scrollbar-macosx:hover > .scroll-element .scroll-bar,
.scrollbar-macosx > .scroll-element.scroll-draggable .scroll-bar {
    opacity: 0.7;
}
.scrollbar-macosx > .scroll-element.scroll-x {
    bottom: 0;
    left: 0;
    overflow: visible;
    width: 100%;
    min-width: 100%;
    height: 0;
}
.scrollbar-macosx > .scroll-element.scroll-y {
    top: 0;
    right: 0;
    width: 0;
    height: 100%;
    min-height: 100%;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-bar {
    top: -9px;
    min-width: 10px;
    height: 7px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-bar {
    left: -9px;
    width: 7px;
    min-height: 10px;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_outer {
    left: 2px;
}
.scrollbar-macosx > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_outer {
    top: 2px;
}
.scrollbar-macosx > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-macosx > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -11px;
}
.scrollbar-macosx > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -11px;
}
.scrollbar-light > .scroll-element,
.scrollbar-light > .scroll-element div {
    position: absolute;
    z-index: 10;
    overflow: hidden;
    margin: 0;
    padding: 0;
    border: none;
}
.scrollbar-light > .scroll-element {
    background-color: #fff;
}
.scrollbar-light > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-light > .scroll-element .scroll-element_outer {
    border-radius: 10px;
}
.scrollbar-light > .scroll-element .scroll-element_size {
    border-radius: 10px;
    background: #dbdbdb;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2RiZGJkYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlOGU4ZTgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: linear-gradient(to right, #dbdbdb 0, #e8e8e8 100%);
}
.scrollbar-light > .scroll-element.scroll-x {
    bottom: 0;
    left: 0;
    width: 100%;
    min-width: 100%;
    height: 17px;
}
.scrollbar-light > .scroll-element.scroll-y {
    top: 0;
    right: 0;
    width: 17px;
    height: 100%;
    min-height: 100%;
}
.scrollbar-light > .scroll-element .scroll-bar {
    border: 1px solid #dbdbdb;
    border-radius: 10px;
    background: #fefefe;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZlZmVmZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNWY1ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: linear-gradient(to right, #fefefe 0, #f5f5f5 100%);
}
.scrollbar-light > .scroll-content.scroll-scrolly_visible {
    left: -17px;
    margin-left: 17px;
}
.scrollbar-light > .scroll-content.scroll-scrollx_visible {
    top: -17px;
    margin-top: 17px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-bar {
    top: 0;
    min-width: 10px;
    height: 10px;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-bar {
    left: 0;
    width: 10px;
    min-height: 10px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-element_outer {
    top: 2px;
    left: 2px;
    height: 12px;
}
.scrollbar-light > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-element_outer {
    top: 2px;
    left: 2px;
    width: 12px;
}
.scrollbar-light > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-light > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -19px;
}
.scrollbar-light > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -19px;
}
.scrollbar-light > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track {
    left: -19px;
}
.scrollbar-light > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track {
    top: -19px;
}
.scrollbar-rail > .scroll-element,
.scrollbar-rail > .scroll-element div {
    position: absolute;
    z-index: 10;
    overflow: hidden;
    margin: 0;
    padding: 0;
    border: none;
}
.scrollbar-rail > .scroll-element {
    background-color: #fff;
}
.scrollbar-rail > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-rail > .scroll-element .scroll-element_size {
    background-color: #999;
    background-color: rgba(0, 0, 0, 0.3);
}
.scrollbar-rail > .scroll-element .scroll-element_outer:hover .scroll-element_size {
    background-color: #666;
    background-color: rgba(0, 0, 0, 0.5);
}
.scrollbar-rail > .scroll-element.scroll-x {
    bottom: 0;
    left: 0;
    width: 100%;
    min-width: 100%;
    height: 12px;
    padding: 3px 0 2px;
}
.scrollbar-rail > .scroll-element.scroll-y {
    top: 0;
    right: 0;
    width: 12px;
    height: 100%;
    min-height: 100%;
    padding: 0 2px 0 3px;
}
.scrollbar-rail > .scroll-element .scroll-bar {
    border-radius: 2px;
    background-color: #d0b9a0;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}
.scrollbar-rail > .scroll-element .scroll-element_outer:hover .scroll-bar {
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}
.scrollbar-rail > .scroll-content.scroll-scrolly_visible {
    left: -17px;
    margin-left: 17px;
}
.scrollbar-rail > .scroll-content.scroll-scrollx_visible {
    top: -17px;
    margin-top: 17px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-bar {
    top: 1px;
    min-width: 10px;
    height: 10px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-bar {
    left: 1px;
    width: 10px;
    min-height: 10px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-element_outer {
    left: 5px;
    height: 15px;
}
.scrollbar-rail > .scroll-element.scroll-x .scroll-element_size {
    top: 5px;
    left: -10px;
    height: 2px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-element_outer {
    top: 5px;
    width: 15px;
}
.scrollbar-rail > .scroll-element.scroll-y .scroll-element_size {
    top: -10px;
    left: 5px;
    width: 2px;
}
.scrollbar-rail > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -25px;
}
.scrollbar-rail > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -25px;
}
.scrollbar-rail > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track {
    left: -25px;
}
.scrollbar-rail > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track {
    top: -25px;
}
.scrollbar-dynamic > .scroll-element,
.scrollbar-dynamic > .scroll-element div {
    position: absolute;
    z-index: 10;
    margin: 0;
    padding: 0;
    border: none;
    background: 0 0;
}
.scrollbar-dynamic > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-dynamic > .scroll-element.scroll-x {
    bottom: 2px;
    left: 0;
    width: 100%;
    min-width: 100%;
    height: 7px;
}
.scrollbar-dynamic > .scroll-element.scroll-y {
    top: 0;
    right: 2px;
    width: 7px;
    height: 100%;
    min-height: 100%;
}
.scrollbar-dynamic > .scroll-element .scroll-element_outer {
    opacity: 0.3;
    border-radius: 12px;
}
.scrollbar-dynamic > .scroll-element .scroll-element_size {
    transition: opacity 0.2s;
    opacity: 0;
    border-radius: 12px;
    background-color: #ccc;
}
.scrollbar-dynamic > .scroll-element .scroll-bar {
    border-radius: 7px;
    background-color: #6c6e71;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-bar {
    top: auto;
    bottom: 0;
    min-width: 24px;
    height: 7px;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-bar {
    right: 0;
    left: auto;
    width: 7px;
    min-height: 24px;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-element_outer {
    top: auto;
    bottom: 0;
    left: 2px;
    transition: height 0.2s;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-element_outer {
    top: 2px;
    right: 0;
    left: auto;
    transition: width 0.2s;
}
.scrollbar-dynamic > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
}
.scrollbar-dynamic > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
}
.scrollbar-dynamic > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -11px;
}
.scrollbar-dynamic > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -11px;
}
.scrollbar-dynamic > .scroll-element.scroll-draggable .scroll-element_outer,
.scrollbar-dynamic > .scroll-element:hover .scroll-element_outer {
    overflow: hidden;
    opacity: 0.7;
}
.scrollbar-dynamic > .scroll-element.scroll-draggable .scroll-element_outer .scroll-element_size,
.scrollbar-dynamic > .scroll-element:hover .scroll-element_outer .scroll-element_size {
    opacity: 1;
}
.scrollbar-dynamic > .scroll-element.scroll-draggable .scroll-element_outer .scroll-bar,
.scrollbar-dynamic > .scroll-element:hover .scroll-element_outer .scroll-bar {
    width: 100%;
    height: 100%;
    border-radius: 12px;
}
.scrollbar-dynamic > .scroll-element.scroll-x.scroll-draggable .scroll-element_outer,
.scrollbar-dynamic > .scroll-element.scroll-x:hover .scroll-element_outer {
    height: 20px;
    min-height: 7px;
}
.scrollbar-dynamic > .scroll-element.scroll-y.scroll-draggable .scroll-element_outer,
.scrollbar-dynamic > .scroll-element.scroll-y:hover .scroll-element_outer {
    width: 20px;
    min-width: 7px;
}
.scrollbar-chrome > .scroll-element,
.scrollbar-chrome > .scroll-element div {
    position: absolute;
    z-index: 10;
    overflow: hidden;
    margin: 0;
    padding: 0;
    border: none;
}
.scrollbar-chrome > .scroll-element {
    background-color: #fff;
}
.scrollbar-chrome > .scroll-element div {
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
}
.scrollbar-chrome > .scroll-element .scroll-element_track {
    border: 1px solid #dbdbdb;
    background: #f1f1f1;
}
.scrollbar-chrome > .scroll-element.scroll-x {
    bottom: 0;
    left: 0;
    width: 100%;
    min-width: 100%;
    height: 16px;
}
.scrollbar-chrome > .scroll-element.scroll-y {
    top: 0;
    right: 0;
    width: 16px;
    height: 100%;
    min-height: 100%;
}
.scrollbar-chrome > .scroll-element .scroll-bar {
    cursor: default;
    border: 1px solid #bdbdbd;
    border-radius: 2px;
    background-color: #d9d9d9;
}
.scrollbar-chrome > .scroll-element .scroll-bar:hover {
    border-color: #a9a9a9;
    background-color: #c2c2c2;
}
.scrollbar-chrome > .scroll-element.scroll-draggable .scroll-bar {
    border-color: #7e7e7e;
    background-color: #919191;
}
.scrollbar-chrome > .scroll-content.scroll-scrolly_visible {
    left: -16px;
    margin-left: 16px;
}
.scrollbar-chrome > .scroll-content.scroll-scrollx_visible {
    top: -16px;
    margin-top: 16px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-bar {
    top: 3px;
    min-width: 10px;
    height: 8px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-bar {
    left: 3px;
    width: 8px;
    min-height: 10px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_outer {
    border-left: 1px solid #dbdbdb;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_track {
    left: -3px;
    height: 14px;
}
.scrollbar-chrome > .scroll-element.scroll-x .scroll-element_size {
    left: -4px;
    height: 14px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_outer {
    border-top: 1px solid #dbdbdb;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_track {
    top: -3px;
    width: 14px;
}
.scrollbar-chrome > .scroll-element.scroll-y .scroll-element_size {
    top: -4px;
    width: 14px;
}
.scrollbar-chrome > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_size {
    left: -19px;
}
.scrollbar-chrome > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_size {
    top: -19px;
}
.scrollbar-chrome > .scroll-element.scroll-x.scroll-scrolly_visible .scroll-element_track {
    left: -19px;
}
.scrollbar-chrome > .scroll-element.scroll-y.scroll-scrollx_visible .scroll-element_track {
    top: -19px;
}
.scrollbar-inner {
    height: 100%;
}
.scrollbar-inner:not(:hover) .scroll-element {
    opacity: 0;
}
.scrollbar-inner .scroll-element {
    margin-right: 2px;
    transition: opacity 0.3s;
}
.scrollbar-inner .scroll-element .scroll-bar,
.scrollbar-inner .scroll-element .scroll-element_track {
    transition: background-color 0.3s;
}
.scrollbar-inner .scroll-element .scroll-element_track {
    background-color: transparent;
}
.scrollbar-inner .scroll-element:hover {
    width: 4px;
}
.scrollbar-inner .scroll-element.scroll-y {
    right: 0;
    width: 3px;
}
.scrollbar-inner .scroll-element.scroll-x {
    bottom: 0;
    height: 3px;
}
.select2-selection__arrow {
    display: none;
}
.select2.select2-container {
    width: 100% !important;
}
.select2-container .select2-selection--single,
.select2-container--default .select2-search--dropdown .select2-search__field,
.select2-container--default .select2-selection--multiple,
.select2-container--default.select2-container--focus .select2-selection--multiple {
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    width: 100%;
    height: calc(1.5em + 1.25rem + 2px);
    padding: 0.625rem 0.75rem;
    transition: all 0.15s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #8898aa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 3px 2px rgba(233, 236, 239, 0.05);
}
@media (prefers-reduced-motion: reduce) {
    .select2-container .select2-selection--single,
    .select2-container--default .select2-search--dropdown .select2-search__field,
    .select2-container--default .select2-selection--multiple,
    .select2-container--default.select2-container--focus .select2-selection--multiple {
        transition: none;
    }
}
.select2-container .select2-selection--single::-ms-expand,
.select2-container--default .select2-search--dropdown .select2-search__field::-ms-expand,
.select2-container--default .select2-selection--multiple::-ms-expand,
.select2-container--default.select2-container--focus .select2-selection--multiple::-ms-expand {
    border: 0;
    background-color: transparent;
}
.select2-container .select2-selection--single:focus,
.select2-container--default .select2-search--dropdown .select2-search__field:focus,
.select2-container--default .select2-selection--multiple:focus,
.select2-container--default.select2-container--focus .select2-selection--multiple:focus {
    color: #8898aa;
    border-color: var(--bs-primary);
    outline: 0;
    background-color: #fff;
    box-shadow: 0 3px 9px rgba(50, 50, 9, 0), 3px 4px 8px rgba(94, 114, 228, 0.1);
}
.select2-container .select2-selection--single::-ms-input-placeholder,
.select2-container--default .select2-search--dropdown .select2-search__field::-ms-input-placeholder,
.select2-container--default .select2-selection--multiple::-ms-input-placeholder,
.select2-container--default.select2-container--focus .select2-selection--multiple::-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
}
.select2-container .select2-selection--single::placeholder,
.select2-container--default .select2-search--dropdown .select2-search__field::placeholder,
.select2-container--default .select2-selection--multiple::placeholder,
.select2-container--default.select2-container--focus .select2-selection--multiple::placeholder {
    opacity: 1;
    color: #adb5bd;
}
.select2-container .select2-selection--single:disabled,
.select2-container .select2-selection--single[readonly],
.select2-container--default .select2-search--dropdown .select2-search__field:disabled,
.select2-container--default .select2-search--dropdown .select2-search__field[readonly],
.select2-container--default .select2-selection--multiple:disabled,
.select2-container--default .select2-selection--multiple[readonly],
.select2-container--default.select2-container--focus .select2-selection--multiple:disabled,
.select2-container--default.select2-container--focus .select2-selection--multiple[readonly] {
    opacity: 1;
    background-color: #e9ecef;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    overflow: inherit;
    padding: 0;
    white-space: inherit;
    text-overflow: inherit;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: inherit;
    color: inherit;
}
.select2-dropdown {
    padding: 0.5rem 0;
    border: 1px solid #dee2e6;
    border-radius: 0.4375rem;
    background-color: #fff;
}
.select2-results__option {
    font-size: 0.875rem;
    padding: 0.5rem 0.75rem;
    color: #212529;
    background-color: #fff;
}
.select2-results__option:focus,
.select2-results__option:hover {
    text-decoration: none;
    color: #16181b;
    background-color: #f6f9fc;
}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option[aria-selected="true"] {
    color: #16181b;
    background-color: transparent;
}
.select2-container--default .select2-results__option[aria-disabled="true"] {
    color: #8898aa;
}
.select2-container--default .select2-selection--multiple,
.select2-container--default.select2-container--focus .select2-selection--multiple {
    height: auto;
    min-height: calc(1.5em + 1.25rem + 2px);
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    display: block;
    margin: 0 0 -0.25rem -0.25rem;
    padding: 0;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    font-size: 0.875rem;
    line-height: 1.5rem;
    display: inline-flex;
    margin: 0 0 0.25rem 0.25rem;
    padding: 0 0.5rem;
    color: #8898aa;
    border: none;
    border-radius: 0.25rem;
    background-color: #adb5bd;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 0.5rem;
    color: #8898aa;
    order: 2;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: var(--bs-body-color);
}
.select2-container .select2-search--inline {
    display: none;
}
.select2-selection[aria-expanded="true"] {
    border-bottom-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
}
.select2-search--dropdown {
    padding: 0.5rem 0.75rem;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
    font-size: 0.875rem;
    line-height: 1.5;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
}
.form-control-sm + .select2-container .select2-selection--single,
.form-control-sm + .select2-container--default .select2-selection--multiple,
.form-control-sm + .select2-container--default.select2-container--focus .select2-selection--multiple {
    font-size: 0.875rem;
    line-height: 1.5;
    height: calc(1.5em + 0.5rem + 2px);
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
}
.form-control-sm + .select2-container--default .select2-selection--multiple,
.form-control-sm + .select2-container--default.select2-container--focus .select2-selection--multiple {
    min-height: calc(1.5em + 0.5rem + 2px);
}
.form-control-sm + .select2-container--default .select2-selection--multiple .select2-selection__choice {
    line-height: 1.3125rem;
}
.form-control-lg + .select2-container .select2-selection--single,
.form-control-lg + .select2-container--default .select2-selection--multiple,
.form-control-lg + .select2-container--default.select2-container--focus .select2-selection--multiple {
    font-size: 1.25rem;
    line-height: 1.5;
    height: calc(1.5em + 1.75rem + 2px);
    padding: 0.875rem 1rem;
    border-radius: 0.4375rem;
}
.form-control-lg + .select2-container--default .select2-selection--multiple,
.form-control-lg + .select2-container--default.select2-container--focus .select2-selection--multiple {
    min-height: calc(1.5em + 1.75rem + 2px);
}
.form-control-lg + .select2-container--default .select2-selection--multiple .select2-selection__choice {
    line-height: 1.875rem;
}
.swal2-popup {
    padding: 1.5rem;
}
.swal2-popup .swal2-title {
    font-size: 1.5rem;
}
.swal2-popup .swal2-content {
    font-size: 0.875rem;
}
.swal2-popup .swal2-image {
    max-width: 200px;
}
.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="today"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after,
.bootstrap-datetimepicker-widget .picker-switch::after,
.bootstrap-datetimepicker-widget table th.next::after,
.bootstrap-datetimepicker-widget table th.prev::after,
.sr-only {
    position: absolute;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
}
.bootstrap-datetimepicker-widget {
    list-style: none;
}
.bootstrap-datetimepicker-widget a .btn:hover {
    background-color: transparent;
}
.bootstrap-datetimepicker-widget.dropdown-menu {
    width: 254px;
    max-width: 254px;
    padding: 8px 6px;
}
.bootstrap-datetimepicker-widget.dropdown-menu .tim-icons {
    opacity: 1;
}
.bootstrap-datetimepicker-widget.dropdown-menu .picker-switch .table-condensed:hover {
    border-radius: 3px;
    background: #eee;
}
.bootstrap-datetimepicker-widget.dropdown-menu .timepicker-picker .table-condensed {
    margin-top: 10px;
    margin-bottom: 5px;
}
.bootstrap-datetimepicker-widget.dropdown-menu .timepicker-picker .table-condensed .btn[data-action="togglePeriod"]:hover,
.bootstrap-datetimepicker-widget.dropdown-menu .timepicker-picker .table-condensed .separator {
    color: #9a9a9a !important;
}
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .decade,
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .month,
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .year {
    color: #9a9a9a;
}
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .decade.active,
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .month.active,
.bootstrap-datetimepicker-widget.dropdown-menu .table-condensed .year.active {
    color: #fff;
}
@media (min-width: 768px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em;
    }
}
@media (min-width: 992px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em;
    }
}
@media (min-width: 1200px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em;
    }
}
.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
    position: absolute;
    right: auto;
    display: inline-block;
    width: 0;
    height: 0;
    content: "";
    vertical-align: middle;
    border-right: 0.4em solid transparent;
    border-bottom: 0.4em solid;
    border-left: 0.4em solid transparent;
}
.bootstrap-datetimepicker-widget.dropdown-menu.top:before {
    display: none;
}
.bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    position: absolute;
    top: auto;
    right: auto;
    bottom: -6px;
    left: 10px;
    display: inline-block;
    width: 0;
    height: 0;
    content: "";
    vertical-align: middle;
    color: #fff;
    border-top: 0.4em solid;
    border-right: 0.4em solid transparent;
    border-left: 0.4em solid transparent;
}
.bootstrap-datetimepicker-widget.dropdown-menu.top {
    margin-top: auto;
}
.bootstrap-datetimepicker-widget.dropdown-menu.top.open {
    margin-top: auto;
}
.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
    right: 6px;
    left: auto;
}
.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
    right: 7px;
    left: auto;
}
.bootstrap-datetimepicker-widget .list-unstyled {
    margin: 0;
}
.bootstrap-datetimepicker-widget a[data-action] {
    padding: 0;
    color: #fff;
    border-width: 0;
}
.bootstrap-datetimepicker-widget a[data-action="togglePicker"],
.bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover {
    color: var(--bs-primary);
}
.bootstrap-datetimepicker-widget a[data-action]:active {
    box-shadow: none;
}
.bootstrap-datetimepicker-widget .timepicker-hour,
.bootstrap-datetimepicker-widget .timepicker-minute,
.bootstrap-datetimepicker-widget .timepicker-second {
    font-size: 1.5em;
    font-weight: 300;
    line-height: 40px;
    width: 40px;
    height: 40px;
    margin: 3px;
    color: #9a9a9a;
    border-radius: 50%;
}
.bootstrap-datetimepicker-widget button[data-action] {
    width: 38px;
    height: 38px;
    padding: 0;
    box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.2);
}
.bootstrap-datetimepicker-widget .btn {
    margin: 0 !important;
}
.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after {
    content: "Increment Hours";
}
.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after {
    content: "Increment Minutes";
}
.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after {
    content: "Decrement Hours";
}
.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after {
    content: "Decrement Minutes";
}
.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after {
    content: "Show Hours";
}
.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after {
    content: "Show Minutes";
}
.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after {
    content: "Toggle AM/PM";
}
.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after {
    content: "Clear the picker";
}
.bootstrap-datetimepicker-widget .btn[data-action="today"]::after {
    content: "Set the date to today";
}
.bootstrap-datetimepicker-widget .picker-switch {
    text-align: center;
    color: var(--bs-primary);
    border-radius: 3px;
}
.bootstrap-datetimepicker-widget .picker-switch::after {
    content: "Toggle Date and Time Screens";
}
.bootstrap-datetimepicker-widget .picker-switch td {
    line-height: inherit;
    width: auto;
    height: auto;
    margin: 0;
    padding: 0;
}
.bootstrap-datetimepicker-widget .picker-switch td span {
    line-height: 2.5;
    width: 100%;
    height: 2.5em;
    margin: 2px 0 !important;
    border-radius: 3px;
}
.bootstrap-datetimepicker-widget table {
    width: 100%;
    margin: 0;
    text-align: center;
}
.bootstrap-datetimepicker-widget table td > div,
.bootstrap-datetimepicker-widget table th > div {
    text-align: center;
}
.bootstrap-datetimepicker-widget table th {
    font-weight: 300;
    line-height: 20px;
    width: 20px;
    height: 20px;
}
.bootstrap-datetimepicker-widget table th.picker-switch {
    width: 145px;
}
.bootstrap-datetimepicker-widget table th.disabled,
.bootstrap-datetimepicker-widget table th.disabled:hover {
    cursor: not-allowed;
    color: #cfcfca;
    background: 0 0;
}
.bootstrap-datetimepicker-widget table th.next span,
.bootstrap-datetimepicker-widget table th.prev span {
    font-size: 12px;
    line-height: 28px;
    width: 27px;
    height: 27px;
    text-align: center;
    color: var(--bs-primary);
    border-radius: 4px;
    border-radius: 50%;
}
.bootstrap-datetimepicker-widget table th.prev::after {
    content: "Previous Month";
}
.bootstrap-datetimepicker-widget table th.next::after {
    content: "Next Month";
}
.bootstrap-datetimepicker-widget table th.dow {
    padding-top: 10px;
    padding-bottom: 5px;
    text-align: center;
    color: var(--bs-primary);
}
.bootstrap-datetimepicker-widget table thead tr:first-child th {
    cursor: pointer;
}
.bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover,
.bootstrap-datetimepicker-widget table thead tr:first-child th:hover span {
    background: #eee;
}
.bootstrap-datetimepicker-widget table td.cw > div {
    font-size: 0.8em;
    line-height: 20px;
    height: 20px;
    color: #cfcfca;
}
.bootstrap-datetimepicker-widget table td.day > div,
.bootstrap-datetimepicker-widget table td.hour > div,
.bootstrap-datetimepicker-widget table td.minute > div {
    font-size: 14px;
    font-weight: 300;
    line-height: 2.2;
    position: relative;
    z-index: -1;
    width: 30px;
    height: 30px;
    margin: 0 auto;
    padding: 0;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    text-align: center;
    color: #9a9a9a;
    border: none;
    border-radius: 50%;
}
.bootstrap-datetimepicker-widget table td.day:hover > div,
.bootstrap-datetimepicker-widget table td.hour:hover > div,
.bootstrap-datetimepicker-widget table td.minute:hover > div,
.bootstrap-datetimepicker-widget table td.second:hover > div {
    cursor: pointer;
    background: #eee;
}
.bootstrap-datetimepicker-widget table td.new > div,
.bootstrap-datetimepicker-widget table td.old > div {
    color: #172b4d;
}
.bootstrap-datetimepicker-widget table td.day,
.bootstrap-datetimepicker-widget table td.today {
    background: 0 0 !important;
}
.bootstrap-datetimepicker-widget table td.today > div:before {
    position: absolute;
    right: 4px;
    bottom: 4px;
    display: inline-block;
    content: "";
    border: 0 0 7px 7px solid transparent;
    border-top-color: rgba(0, 0, 0, 0.2);
    border-bottom-color: #68b3c8;
}
.bootstrap-datetimepicker-widget table td.active:hover > div,
.bootstrap-datetimepicker-widget table td.active > div {
    color: #fff;
    background-color: var(--bs-primary);
    box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.2);
}
.bootstrap-datetimepicker-widget table td.active.today:before > div {
    border-bottom-color: #fff;
}
.bootstrap-datetimepicker-widget table td.disabled:hover > div,
.bootstrap-datetimepicker-widget table td.disabled > div {
    cursor: not-allowed;
    color: #cfcfca;
    background: 0 0;
}
.bootstrap-datetimepicker-widget table td span {
    line-height: 40px;
    display: inline-block;
    width: 40px;
    height: 40px;
    margin: 0 3px;
    cursor: pointer;
    text-align: center;
    border-radius: 50%;
}
.bootstrap-datetimepicker-widget table td span.active {
    color: #fff;
    background-color: var(--bs-primary);
}
.bootstrap-datetimepicker-widget table td span.old {
    color: #cfcfca;
}
.bootstrap-datetimepicker-widget table td span.disabled,
.bootstrap-datetimepicker-widget table td span.disabled:hover {
    cursor: not-allowed;
    color: #cfcfca;
    background: 0 0;
}
.bootstrap-datetimepicker-widget .timepicker-hours span,
.bootstrap-datetimepicker-widget .timepicker-minutes span,
.bootstrap-datetimepicker-widget .timepicker-picker span {
    border-radius: 50% !important;
}
.bootstrap-datetimepicker-widget.usetwentyfour td.hour {
    line-height: 27px;
    height: 27px;
}
.input-group.date .input-group-addon {
    cursor: pointer;
}
.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
    z-index: 1;
    padding: 1px;
    cursor: pointer;
    text-align: center;
}
.bootstrap-datetimepicker-widget .separator {
    position: relative;
    width: auto;
    height: auto;
    color: red;
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .picker-switch,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .separator,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .timepicker-hours span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .timepicker-minutes span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget a[data-action="togglePicker"],
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.day > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.hour > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.minute > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.next span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.prev span {
    color: #9a9a9a;
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.dow {
    color: rgba(255, 255, 255, 0.8);
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.new > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.old > div {
    color: rgba(255, 255, 255, 0.4);
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget button[data-action] {
    background-color: #fff;
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.active > div {
    background-color: #fff;
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td span:hover,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.hour:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.minute:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.second:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td:not(.active).day:hover > div {
    background: rgba(255, 255, 255, 0.2);
}
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table thead tr:first-child th:hover span {
    background-color: rgba(255, 255, 255, 0.2);
}
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget {
    background-color: var(--bs-primary);
}
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    color: var(--bs-primary);
}
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget {
    background-color: var(--bs-info);
}
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    color: var(--bs-info);
}
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget {
    background-color: var(--bs-success);
}
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    color: var(--bs-success);
}
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget {
    background-color: var(--bs-danger);
}
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    color: var(--bs-danger);
}
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget {
    background-color: var(--bs-warning);
}
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after {
    color: var(--bs-warning);
}
.bootstrap-datetimepicker-widget.dropdown-black .datepicker-days .day,
.bootstrap-datetimepicker-widget.dropdown-black .datepicker-days .minute {
    color: rgba(255, 255, 255, 0.7);
}
.bootstrap-datetimepicker-widget.dropdown-black .datepicker-days .day:hover,
.bootstrap-datetimepicker-widget.dropdown-black .datepicker-days .minute:hover {
    color: #212529;
}
.bootstrap-datetimepicker-widget.dropdown-black table td span,
.bootstrap-datetimepicker-widget.dropdown-black table td.hour,
.bootstrap-datetimepicker-widget.dropdown-black table td.minute {
    color: rgba(255, 255, 255, 0.7);
}
.bootstrap-datetimepicker-widget.dropdown-black table td span:hover,
.bootstrap-datetimepicker-widget.dropdown-black table td.hour:hover,
.bootstrap-datetimepicker-widget.dropdown-black table td.minute:hover {
    color: rgba(255, 255, 255, 0.4);
    background: 0 0;
}
.bootstrap-datetimepicker-widget.dropdown-black table td span:hover div,
.bootstrap-datetimepicker-widget.dropdown-black table td.hour:hover div,
.bootstrap-datetimepicker-widget.dropdown-black table td.minute:hover div {
    background: 0 0;
}
.bootstrap-datetimepicker-widget.dropdown-black table td .btn[data-action] {
    color: #fff;
}
.bootstrap-datetimepicker-widget.dropdown-black table td .btn[data-action="togglePeriod"] {
    background: 0 0;
}
.ct-navbar {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    background-color: var(--bs-primary);
    box-shadow: rgba(116, 129, 141, 0.1) 0 1px 1px 0;
}
@media (max-width: 991.98px) {
    .ct-navbar {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .ct-navbar .navbar-nav-scroll {
        font-size: 0.875rem;
        overflow: hidden;
        max-width: 100%;
        height: 2.5rem;
        margin-top: 0.25rem;
    }
    .ct-navbar .navbar-nav-scroll .navbar-nav {
        overflow-x: auto;
        padding-bottom: 2rem;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
}
@media (min-width: 768px) {
    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .ct-navbar {
            position: -webkit-sticky;
            position: sticky;
            z-index: 1071;
            top: 0;
        }
    }
}
.ct-navbar .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    color: rgba(255, 255, 255, 0.9) !important;
}
.ct-navbar .navbar-nav .nav-link.active,
.ct-navbar .navbar-nav .nav-link:hover {
    color: #fff !important;
    background-color: transparent !important;
}
.ct-navbar .navbar-nav .nav-link.active {
    font-weight: 500;
}
.ct-navbar .navbar-nav-svg {
    display: inline-block;
    width: 1rem;
    height: 1rem;
    vertical-align: text-top;
}
.ct-navbar .dropdown-menu {
    font-size: 0.875rem;
}
.ct-navbar .dropdown-item.active {
    font-weight: 500;
    padding-left: 25px;
    color: #212529;
    background-color: transparent;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23292b2c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: 0.4rem 0.87rem;
    background-size: 0.75rem 0.75rem;
}
.github-corner {
    position: fixed;
    z-index: 1080;
    right: 0;
}
.github-corner:hover .octo-arm {
    animation: octocat-wave 560ms ease-in-out;
}
.github-corner svg {
    color: var(--bs-primary);
    fill: #fff;
}
@keyframes octocat-wave {
    0%,
    100% {
        transform: rotate(0);
    }
    20%,
    60% {
        transform: rotate(-25deg);
    }
    40%,
    80% {
        transform: rotate(10deg);
    }
}
.ct-clipboard {
    position: relative;
    display: none;
    float: right;
}
.ct-clipboard + .highlight {
    margin-top: 0;
}
.btn-clipboard {
    font-size: 75%;
    position: absolute;
    z-index: 10;
    top: 1rem;
    right: 1rem;
    display: block;
    padding: 0.25rem 0.5rem;
    cursor: pointer;
    color: #fff;
    border: 0;
    border-radius: 0.25rem;
    background-color: transparent;
    background-color: var(--bs-primary);
}
.btn-clipboard:hover {
    color: #fff;
    background-color: #324cdd;
}
@media (min-width: 768px) {
    .ct-clipboard {
        display: block;
    }
}
.ct-example-row .row > .col span,
.ct-example-row .row > [class^="col-"] span {
    font-size: 0.875rem;
    display: block;
    margin: 1rem 0;
    padding: 0.75rem;
    color: #393f49;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.1) 0 0 0 1px, rgba(0, 0, 0, 0.1) 0 4px 16px;
}
.ct-example-row .no-gutters > .col span,
.ct-example-row .no-gutters > [class^="col-"] span {
    border-radius: 0;
}
.ct-example-row .flex-items-bottom,
.ct-example-row .flex-items-middle,
.ct-example-row .flex-items-top {
    min-height: 6rem;
    background-color: rgba(255, 0, 0, 0.1);
}
.ct-example-row-flex-cols .row {
    min-height: 10rem;
    background-color: rgba(255, 0, 0, 0.1);
}
.ct-example-row-flex-cols .row + .row {
    margin-top: 1rem;
}
.ct-highlight {
    border: 1px solid rgba(94, 114, 228, 0.15);
    background-color: rgba(94, 114, 228, 0.15);
}
.example-container {
    width: 800px;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}
.example-row {
    display: flex;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: wrap;
}
.example-content-main {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px) {
    .example-content-main {
        max-width: 50%;
        flex: 0 0 50%;
    }
}
@media (min-width: 992px) {
    .example-content-main {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }
}
.example-content-secondary {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px) {
    .example-content-secondary {
        max-width: 50%;
        flex: 0 0 50%;
    }
}
@media (min-width: 992px) {
    .example-content-secondary {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }
}
.ct-example-container {
    min-width: 16rem;
    max-width: 25rem;
    margin-right: auto;
    margin-left: auto;
}
.ct-example-container-header {
    height: 3rem;
    margin-bottom: 0.5rem;
    border-radius: 0.25rem;
    background-color: #fff;
}
.ct-example-container-sidebar {
    float: right;
    width: 4rem;
    height: 8rem;
    border-radius: 0.25rem;
    background-color: #cbd2f6;
}
.ct-example-container-body {
    height: 8rem;
    margin-right: 4.5rem;
    border-radius: 0.25rem;
    background-color: #cbd2f6;
}
.ct-example-container-fluid {
    max-width: none;
}
.ct-example {
    position: relative;
    margin: 1rem -15px 0;
}
.ct-example::after {
    display: block;
    clear: both;
    content: "";
}
@media (min-width: 576px) {
    .ct-example {
        margin-right: 0;
        margin-left: 0;
    }
}
.ct-example + .clipboard + .highlight,
.ct-example + .highlight {
    margin-top: 0;
}
.ct-example + p {
    margin-top: 2rem;
}
.ct-example .pos-f-t {
    position: relative;
    margin: -1rem;
}
@media (min-width: 576px) {
    .ct-example .pos-f-t {
        margin: -1.5rem;
    }
}
.ct-example .custom-file-input:lang(es) ~ .custom-file-label::after {
    content: "Elegir";
}
.ct-example > .form-control + .form-control {
    margin-top: 0.5rem;
}
.ct-example .badge,
.ct-example .btn,
.ct-example .form-control,
.ct-example > .alert + .alert,
.ct-example > .nav + .nav,
.ct-example > .navbar + .navbar,
.ct-example > .progress + .btn,
.ct-example > .progress + .progress {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.ct-example .input-group .btn,
.ct-example .input-group .form-control {
    margin-top: 0;
    margin-bottom: 0;
}
.ct-example .btn .badge {
    margin-top: 0;
    margin-bottom: 0;
}
.ct-example .btn-group {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.ct-example .btn-group .btn {
    margin: 0;
}
.ct-example .alert {
    margin: 0;
}
.ct-example .alert + .alert {
    margin-top: 1.25rem;
}
.ct-example > .dropdown-menu:first-child {
    position: static;
    display: block;
}
.ct-example > .form-group:last-child {
    margin-bottom: 0;
}
.ct-example > .close {
    float: none;
}
.ct-example-type .table .type-info {
    vertical-align: middle;
    color: #999;
}
.ct-example-type .table td {
    padding: 1rem 0;
    border-color: #eee;
}
.ct-example-type .table tr:first-child td {
    border-top: 0;
}
.ct-example-type h1,
.ct-example-type h2,
.ct-example-type h3,
.ct-example-type h4,
.ct-example-type h5,
.ct-example-type h6 {
    margin-top: 0;
    margin-bottom: 0;
}
.ct-example-bg-classes p {
    padding: 1rem;
}
.ct-example > img + img {
    margin-left: 0.5rem;
}
.ct-example > .btn-group {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
}
.ct-example > .btn-toolbar + .btn-toolbar {
    margin-top: 0.5rem;
}
.ct-example-control-sizing input[type="text"] + input[type="text"],
.ct-example-control-sizing select {
    margin-top: 0.5rem;
}
.ct-example-form .input-group {
    margin-bottom: 0.5rem;
}
.ct-example > textarea.form-control {
    resize: vertical;
}
.ct-example > .list-group {
    max-width: 400px;
}
.ct-example .fixed-top,
.ct-example .sticky-top {
    position: static;
    margin: -1rem -1rem 1rem;
}
.ct-example .fixed-bottom {
    position: static;
    margin: 1rem -1rem -1rem;
}
@media (min-width: 576px) {
    .ct-example .fixed-top,
    .ct-example .sticky-top {
        margin: -1.5rem -1.5rem 1rem;
    }
    .ct-example .fixed-bottom {
        margin: 1rem -1.5rem -1.5rem;
    }
}
.ct-example .pagination {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.modal {
    z-index: 1072;
}
.modal .popover,
.modal .tooltip {
    z-index: 1073;
}
.modal-backdrop {
    z-index: 1071;
}
.ct-example-modal {
    background-color: #fafafa;
}
.ct-example-modal .modal {
    position: relative;
    z-index: 1;
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    display: block;
}
.ct-example-modal .modal-dialog {
    left: auto;
    margin-right: auto;
    margin-left: auto;
}
.ct-example-tabs .nav-tabs {
    margin-bottom: 1rem;
}
.ct-example-popover-static {
    padding-bottom: 1.5rem;
    background-color: #f9f9f9;
}
.ct-example-popover-static .popover {
    position: relative;
    display: block;
    float: left;
    width: 260px;
    margin: 1.25rem;
}
.tooltip-demo a {
    white-space: nowrap;
}
.ct-example-tooltip-static .tooltip {
    position: relative;
    display: inline-block;
    margin: 10px 20px;
    opacity: 1;
}
.scrollspy-example {
    position: relative;
    overflow: auto;
    height: 200px;
    margin-top: 0.5rem;
}
.scrollspy-example-2 {
    position: relative;
    overflow: auto;
    height: 350px;
}
.ct-example-border-utils [class^="border"] {
    display: inline-block;
    width: 5rem;
    height: 5rem;
    margin: 0.25rem;
    background-color: #f5f5f5;
}
.ct-example-border-utils-0 [class^="border"] {
    border: 1px solid #e9ecef;
}
.highlight {
    margin-top: 1rem;
    padding: 0;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
@media (min-width: 576px) {
    .highlight {
        padding: 0;
    }
}
.ct-content .highlight {
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 576px) {
    .ct-content .highlight {
        margin-right: 0;
        margin-left: 0;
    }
}
.ct-example:not(:last-child) {
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #e9ecef;
}
.ct-example .tab-content .tab-example-result {
    padding: 1.25rem;
    border: 1px solid #e6ecf1;
    border-radius: 0.25rem;
    background-color: #fff;
}
.ct-example .nav-tabs-code {
    margin-bottom: 0.375rem;
}
.ct-example .nav-tabs-code .nav-link {
    font-size: 0.875rem;
}
.ct-example .nav-tabs-code .nav-link.active,
.ct-example .nav-tabs-code .nav-link:active {
    color: var(--bs-primary);
}
.icon-examples {
    margin-top: 1rem;
}
.btn-icon-clipboard {
    font-family: inherit;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.25;
    display: inline-block;
    width: 100%;
    margin: 0;
    margin: 0.5rem 0;
    padding: 24px;
    cursor: pointer;
    text-align: left;
    vertical-align: middle;
    text-decoration: none;
    color: #393f49;
    border: 0 none;
    border-radius: 4px;
    background-color: #f8f9fa;
    -moz-appearance: none;
}
.btn-icon-clipboard:hover {
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.1) 0 0 0 1px, rgba(0, 0, 0, 0.1) 0 4px 16px;
}
.btn-icon-clipboard > div {
    display: flex;
    align-items: center;
}
.btn-icon-clipboard i {
    font-size: 1.5rem;
    box-sizing: content-box;
    vertical-align: middle;
    color: #393f49;
}
.btn-icon-clipboard span {
    font-size: 0.875rem;
    line-height: 1.5;
    display: inline-block;
    overflow: hidden;
    margin-left: 16px;
    vertical-align: middle;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #393f49;
}
code[class*="language-"],
pre[class*="language-"] {
    font-family: Consolas, Menlo, Monaco, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", "Courier New", Courier, monospace;
    font-size: 14px;
    line-height: 1.375;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    -webkit-hyphens: none;
    hyphens: none;
    color: #5e6687;
    border-radius: 0.25rem;
    background: #f5f7ff;
    direction: ltr;
    -ms-hyphens: none;
}
code[class*="language-"] ::selection,
code[class*="language-"]::selection,
pre[class*="language-"] ::selection,
pre[class*="language-"]::selection {
    background: #dfe2f1;
    text-shadow: none;
}
pre[class*="language-"] {
    overflow: auto;
    margin: 0;
    padding: 1.25rem;
}
:not(pre) > code[class*="language-"] {
    padding: 0.1em;
    border-radius: 0.3em;
}
.token.cdata,
.token.comment,
.token.doctype,
.token.prolog {
    color: #898ea4;
}
.token.punctuation {
    color: #5e6687;
}
.token.namespace {
    opacity: 0.7;
}
.token.boolean,
.token.number,
.token.operator {
    color: #c76b29;
}
.token.property {
    color: #c08b30;
}
.token.tag {
    color: #3d8fd1;
}
.token.string {
    color: #22a2c9;
}
.token.selector {
    color: #6679cc;
}
.token.attr-name {
    color: #c76b29;
}
.language-css .token.string,
.style .token.string,
.token.entity,
.token.url {
    color: #22a2c9;
}
.token.attr-value,
.token.control,
.token.directive,
.token.keyword,
.token.unit {
    color: #ac9739;
}
.token.atrule,
.token.regex,
.token.statement {
    color: #22a2c9;
}
.token.placeholder,
.token.variable {
    color: #3d8fd1;
}
.token.deleted {
    text-decoration: line-through;
}
.token.inserted {
    text-decoration: none;
    border-bottom: 1px dotted #202746;
}
.token.italic {
    font-style: italic;
}
.token.bold,
.token.important {
    font-weight: 700;
}
.token.important {
    color: #c94922;
}
.token.entity {
    cursor: help;
}
pre > code.highlight {
    outline: 0.4em solid #c94922;
    outline-offset: 0.4em;
}
.line-numbers .line-numbers-rows {
    border-right-color: #dfe2f1;
}
.line-numbers-rows > span:before {
    color: #979db4;
}
.line-highlight {
    background: rgba(107, 115, 148, 0.2);
    background: linear-gradient(to right, rgba(107, 115, 148, 0.2) 70%, rgba(107, 115, 148, 0));
}
.docs {
    background: #fff;
}
.docs h6 {
    font-size: 1rem;
    font-weight: 600;
}
.ct-content {
    order: 1;
}
.ct-content > h2[id],
.ct-content > h3[id],
.ct-content > h4[id] {
    pointer-events: none;
}
.ct-content > h2[id] > a,
.ct-content > h2[id] > div,
.ct-content > h3[id] > a,
.ct-content > h3[id] > div,
.ct-content > h4[id] > a,
.ct-content > h4[id] > div {
    pointer-events: auto;
}
.ct-content > h2[id]::before,
.ct-content > h3[id]::before,
.ct-content > h4[id]::before {
    display: block;
    visibility: hidden;
    height: 6rem;
    margin-top: -6rem;
    content: "";
}
.ct-content > table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
}
@media (max-width: 991.98px) {
    .ct-content > table {
        display: block;
        overflow-x: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .ct-content > table.table-bordered {
        border: 0;
    }
}
.ct-content > table > tbody > tr > td,
.ct-content > table > tbody > tr > th,
.ct-content > table > tfoot > tr > td,
.ct-content > table > tfoot > tr > th,
.ct-content > table > thead > tr > td,
.ct-content > table > thead > tr > th {
    padding: 1rem;
    vertical-align: top;
    border: 1px solid #e9ecef;
}
.ct-content > table > tbody > tr > td > p:last-child,
.ct-content > table > tbody > tr > th > p:last-child,
.ct-content > table > tfoot > tr > td > p:last-child,
.ct-content > table > tfoot > tr > th > p:last-child,
.ct-content > table > thead > tr > td > p:last-child,
.ct-content > table > thead > tr > th > p:last-child {
    margin-bottom: 0;
}
.ct-content > table td:first-child > code {
    white-space: nowrap;
}
.ct-content > h2:not(:first-child) {
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 3rem;
}
.ct-content > h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-top: 2.5rem;
}
.ct-content > ol li,
.ct-content > ul li {
    margin-bottom: 0.25rem;
}
@media (min-width: 992px) {
    .ct-content > ol,
    .ct-content > p,
    .ct-content > ul {
        max-width: 80%;
    }
}
.ct-page-title {
    margin-bottom: 1.5rem;
    padding-left: 1.25rem;
    border-left: 2px solid var(--bs-primary);
}
.ct-title {
    font-weight: 300;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
}
@media (min-width: 576px) {
    .ct-title {
        font-size: 1.5rem;
        font-weight: 600;
    }
}
.ct-lead {
    font-weight: 500;
    color: #3b454e;
}
@media (min-width: 576px) {
    .ct-lead {
        font-size: 0.875rem;
        max-width: 80%;
        margin-bottom: 1rem;
    }
}
.ct-text-purple {
    color: var(--bs-primary);
}
.ct-text-purple-bright {
    color: #9da9f2;
}
.ct-tabs-example .nav-link i {
    margin-right: 5px;
}
.color-swatch {
    margin: 1rem 0;
    border-radius: 0.25rem;
    background-color: #f4f5f7;
}
.color-swatch:after {
    display: table;
    clear: both;
    content: " ";
}
.color-swatch-header {
    position: relative;
    height: 0;
    padding-bottom: 50%;
    border: 1px solid transparent;
    border-radius: 0.25rem 0.25rem 0 0;
}
.color-swatch-header.is-light {
    border-color: #c1c7d0;
}
.color-swatch-header .pass-fail {
    position: absolute;
    bottom: 0;
    width: 100%;
}
.color-swatch-header .pass-fail-item-wrap {
    position: relative;
    left: 50%;
    float: left;
    transform: translateX(-50%);
}
.color-swatch-header .pass-fail-item-group {
    display: inline-block;
    padding: 0 5px;
}
.color-swatch-header .pass-fail-item {
    display: inline-block;
    float: left;
    padding: 2px;
    text-align: center;
}
.color-swatch-header .pass-fail-item.white .example {
    color: #fff;
}
.color-swatch-header .pass-fail-item.small .example {
    font-size: 10px;
}
.color-swatch-header .pass-fail-item .lozenge {
    font-size: 11px;
    font-weight: 600;
    line-height: 10px;
    padding: 2px 4px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    color: #fff;
    border-radius: 4px;
    background: #000;
}
.color-swatch-body {
    position: relative;
    left: 50%;
    float: left;
    padding: 10px 0;
    transform: translateX(-50%);
}
.color-swatch-body .prop-item-wrap {
    float: left;
    min-width: 65px;
    padding: 0 15px;
}
.color-swatch-body .prop-item {
    padding: 15px 0;
}
.color-swatch-body .prop-item .label {
    font-size: 11px;
    line-height: 16px;
    text-transform: uppercase;
    color: #62748c;
}
.color-swatch-body .prop-item .value {
    font-size: 14px;
}
.table-colors {
    font-size: 16px;
    font-weight: 600;
    width: 100%;
}
.table-colors td,
.table-colors td:first-child,
.table-colors td:last-child,
.table-colors:first-child td,
.table-colors:first-child td:first-child,
.table-colors:first-child td:last-child {
    padding: 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    background: rgba(255, 255, 255, 0.9);
}
.table-colors tr:last-child td,
.table-colors:first-child tr:last-child td {
    border-bottom: none;
}
.table-colors td:nth-child(1),
.table-colors:first-child td:nth-child(1) {
    line-height: 40px;
}
.table-colors .swatch,
.table-colors:first-child .swatch {
    display: inline-block;
    float: left;
    width: 40px;
    height: 40px;
    margin-right: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.table-colors .swatch.is-light,
.table-colors:first-child .swatch.is-light {
    border-color: #c1c7d0;
}
.table-colors .lozenge,
.table-colors:first-child .lozenge {
    font-size: 10px;
    font-weight: 600;
    line-height: 10px;
    display: inline-block;
    float: left;
    margin: 5px 10px 0 0;
    padding: 2px 4px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    color: #042a53;
    border-radius: 4px;
    background: #97a0af;
}
.ct-toc {
    font-size: 0.875rem;
    padding-top: 2rem;
    padding-bottom: 1.5rem;
    order: 2;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
    .ct-toc {
        position: -webkit-sticky;
        position: sticky;
        top: 4rem;
        overflow-y: auto;
        height: calc(100vh - 4rem);
    }
}
.section-nav {
    padding-left: 0;
    border-left: 1px solid #eee;
}
.section-nav ul {
    padding-left: 1rem;
}
.section-nav ul ul {
    display: none;
}
.toc-entry {
    font-size: 1rem;
    display: block;
}
.toc-entry a {
    font-size: 90%;
    display: block;
    padding: 0.125rem 1.5rem;
    color: #99979c;
}
.toc-entry a:hover {
    text-decoration: none;
    color: var(--bs-primary);
}
.ct-sidebar {
    border-bottom: 1px solid #e6ecf1;
    background-color: #f5f7f9;
    order: 0;
}
@media (min-width: 768px) {
    .ct-sidebar {
        border-right: 1px solid #e6ecf1;
    }
    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .ct-sidebar {
            position: -webkit-sticky;
            position: sticky;
            z-index: 1000;
            top: 4rem;
            height: calc(100vh - 4rem);
        }
    }
}
@media (min-width: 1200px) {
    .ct-sidebar {
        flex: 0 1 320px;
    }
}
.ct-links {
    margin-right: -15px;
    margin-left: -15px;
    padding-top: 2rem;
    padding-bottom: 1rem;
}
@media (min-width: 768px) {
    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .ct-links {
            overflow-y: auto;
            max-height: calc(100vh - 5rem);
        }
    }
}
@media (min-width: 768px) {
    .ct-links {
        display: block !important;
    }
}
.ct-search {
    position: relative;
    margin-right: -15px;
    margin-left: -15px;
    padding: 1rem 15px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.ct-search .form-control:focus {
    border-color: #9da9f2;
    box-shadow: 0 0 0 3px rgba(157, 169, 242, 0.25);
}
.ct-search-docs-toggle {
    line-height: 1;
    color: #212529;
}
.ct-sidenav {
    display: none;
}
.ct-toc-link {
    font-size: 0.875rem;
    font-weight: 600;
    display: block;
    padding: 0.25rem 1.5rem;
    color: #0d2b3e;
}
.ct-toc-link:hover {
    text-decoration: none;
    color: rgba(0, 0, 0, 0.85);
}
.ct-toc-item.active {
    margin-bottom: 1rem;
}
.ct-toc-item.active:not(:first-child) {
    margin-top: 1rem;
}
.ct-toc-item.active > .ct-toc-link {
    color: rgba(0, 0, 0, 0.85);
}
.ct-toc-item.active > .ct-toc-link:hover {
    background-color: transparent;
}
.ct-toc-item.active > .ct-sidenav {
    display: block;
}
.ct-sidebar .nav > li > a {
    font-size: 84%;
    display: block;
    padding: 0.25rem 1.5rem;
    color: #4c555a;
}
.ct-sidebar .nav > li > a:hover {
    text-decoration: none;
    color: rgba(0, 0, 0, 0.85);
    background-color: transparent;
}
.ct-sidebar .nav > .active > a {
    font-weight: 500;
    position: relative;
    padding-left: 2rem;
    color: #0099e5;
    background-color: transparent;
}
.ct-sidebar .nav > .active > a:before {
    position: absolute;
    top: 50%;
    left: 1.5rem;
    width: 2px;
    height: 16px;
    content: "";
    transform: translateY(-50%);
    background-color: #0099e5;
}
.ct-sidebar .nav > .active:hover > a {
    color: #0099e5;
}
.scrollbar-inner {
    height: 100%;
}
.scrollbar-inner:not(:hover) .scroll-element {
    opacity: 0;
}
.scrollbar-inner .scroll-element {
    margin-right: 2px;
    transition: opacity 0.3s;
}
.scrollbar-inner .scroll-element .scroll-bar,
.scrollbar-inner .scroll-element .scroll-element_track {
    transition: background-color 0.3s;
}
.scrollbar-inner .scroll-element .scroll-element_track {
    background-color: transparent;
}
.scrollbar-inner .scroll-element.scroll-y {
    right: 0;
    width: 3px;
}
.scrollbar-inner .scroll-element.scroll-x {
    bottom: 0;
    height: 3px;
}
.ct-footer {
    font-size: 85%;
    text-align: center;
    background-color: #f7f7f7;
}
.ct-footer a {
    font-weight: 500;
    color: var(--bs-body-color);
}
.ct-footer a:focus,
.ct-footer a:hover {
    color: var(--bs-primary);
}
.ct-footer p {
    margin-bottom: 0;
}
@media (min-width: 576px) {
    .ct-footer {
        text-align: left;
    }
}
.ct-footer-links {
    margin-bottom: 1rem;
    padding-left: 0;
}
.ct-footer-links li {
    display: inline-block;
}
.ct-footer-links li + li {
    margin-left: 1rem;
}

</style>
<?php 

while($row = mysqli_fetch_array($data["getinfouser"])){?>

<div class="content-wrapper">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>

            </div>

            <div class="modal-body">
                <form action="Home/UpdateInfor" method="POST">

                    <div class="form-row">

                        <div class="form-group col-md-4">

                            <label for="inputname">Họ và tên</label>

                            <input type="text" class="form-control" id="inputname" name="inputname"
                                placeholder="Nhập họ và tên" value="<?php echo Session::get('fullname')?>">

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputphone">Số điện thoại</label>

                            <input id="phone" type="text" class="form-control" name="inputphone"
                                placeholder="Nhập số điện thoại" value="<?php echo $row['phone'] ?>">

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputidstudent">MSSV</label>

                            <input id="idstudent" type="text" class="form-control" name="inputidstudent"
                                placeholder="Nhập mã số sinh viên" value="<?php echo Session::get('id_student')?>" >



                        </div>

                    </div>

                    <div class="form-row">

                       <div class="form-group col-md-6">

                            <label for="inputname">Giới tính</label>

                            <select id="gender" name="inputgender" class="form-control">

                                <option selected>Choose...</option>

                                <option value="0">Nữ</option>

                                <option value="1">Nam</option>

                                <option value="2">Khác</option>

                            </select>

                        </div>

                        <div class="form-group col-md-6">

                            <label for="inputfaculty">Khoa</label>

                            <select id="faculty" name="inputfaculty" class="form-control">

                                <option value=" <?php echo $row['faculty'] ?>"> <?php echo $row['faculty'] ?></option>

                                <option value="Khoa công nghệ thông tin">Khoa công nghệ thông tin</option>

                                <option value="Khoa dược">Khoa dược</option>

                                <option value="Khoa điện - điện tử">Khoa điện - điện tử</option>

                                <option value="Khoa giáo dục quốc tế">Khoa giáo dục quốc tế</option>

                                <option value="Khoa kế toán">Khoa kế toán</option>

                                <option value="Khoa khoa học thể thao">Khoa khoa học thể thao</option>

                                <option value="Khoa khoa học ứng dụng">Khoa khoa học ứng dụng</option>

                                <option value="Khoa khoa học xã hội và nhân văn">Khoa khoa học xã hội và nhân

                                    văn</option>

                                <option value="Khoa kỹ thuật công trình">Khoa kỹ thuật công trình</option>

                                <option value="Khoa luật">Khoa luật</option>

                                <option value="Khoa môi trường và bảo hộ lao động">Khoa môi trường và bảo hộ lao

                                    động</option>

                                <option value="Khoa mỹ thuật công nghiệp">Khoa mỹ thuật công nghiệp</option>

                                <option value="Khoa ngoại ngữ">Khoa ngoại ngữ</option>

                                <option value="Khoa quản trị kinh doanh">Khoa quản trị kinh doanh</option>

                                <option value="Khoa tài chính - ngân hàng">Khoa tài chính - ngân hàng</option>

                                <option value="Khoa toán - thống kê">Khoa toán - thống kê</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <label for="inputbirthday">Năm sinh</label>

                            <div class="input-group">

                                <input name="inputbirthday" id="inputbirthday" class="form-control" type="date">

                            </div>

                        </div>

                        <div class="form-group col-md-6">

                            <label for="">Email</label>

                            <input id="inputemail" name="inputemail" class="form-control" type="text">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputfacebook">Link Facebook</label>

                        <input id="inputfacebook" type="text" class="form-control" name="inputfacebook"
                            placeholder="Nhập link Facebook">

                    </div>

                    <button name="submitupdate" type="submit" class="btn btn-primary">Cập nhật</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>

                </form>

            </div>



        </div>

    </div>

</div>

    <div class="container-fluid pt-3 drop-zone"><div class="row removable">
        <div class="col-lg-4 drop-zone">
        <div class="card card-profile draggable" draggable="true">
                    <span class="font-weight-light" style="position: absolute;top: 2px; left: 2px;"><a 
                    data-toggle="modal"
                                                data-target="#exampleModal"><b>Chỉnh sửa</b></a></span>
                      <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/materialpro-bootstrap/package/assets/images/background/profile-bg.jpg" alt="Image placeholder" class="card-img-top">
                      <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                          <div class="card-profile-image">
                            <a href="#">
                              <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="rounded-circle">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                          <!--<a href="#" class="btn btn-sm mr-4 btn-default">Connect</a>-->
                          <!--<a href="#" class="btn btn-sm float-right btn-warning">Message</a>-->
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="text-center">
                            <br>
                          <h5 class="h3">
                           <?php echo Session::get('fullname')?>
                          </h5>
                          <h5 class="font-weight-300">
                             <span class="badge badge-success badge-pill m-r-5 m-b-5">
                            <?php if($admin == true){?>
                            Administrator
                            <?php       
}        else if($personnel== true){?>
                            Thành viên
                            <?php }
else if($attendance == true){?>
                            Quản lý điểm danh
                            <?php       
}        else if($block== true){?>
                            Tài khoản bị khóa
                            <?php } ?>
                        </span>
                          </h5
                          <h5 class="h5 mt-3">
                            <?php $timestamp = strtotime($row['birthday']); echo date("d-m-Y", $timestamp); ?>
                          </h5>
                          <h5 class="h5 mt-3">
                            <?php echo $row['phone'] ?>
                          </h5>
                          <h5>
                            <?php echo $row['faculty'] ?>
                          </h5>
                        </div>
                      </div>
                    </div></div><div class="col-lg-8 drop-zone"><div class="card draggable" draggable="true">
                      <div class="card-header bg-transparent">
                        <h6 class="text-uppercase text-muted ls-1 mb-1"></h6>
                        <h5 class="h3 mb-0">Danh sách đã đăng ký lịch trực</h5>
                      </div>
                      <div class="card-body">
                         <table class="table table-bordered">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th class="pb-4" scope="col" width="5%">Ca/Thứ</th>
                                                    <th class="text-center" scope="col" width="25%">Thứ Hai <br><small
                                                            class="mon"></small></th>
                                                    <th class="text-center" scope="col" width="25%">Thứ Tư <br><small
                                                            class="wed"></small></th>
                                                    <th class="text-center" scope="col" width="25%">Thứ Sáu <br><small
                                                            class="fri"></small></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Ca 1</th>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister12"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister14"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister16"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ca 2</th>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister22"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister24"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister26"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ca 3</th>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister32"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister34"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister36"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ca 4</th>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister42"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister44"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{                        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php 
      while($row = mysqli_fetch_array($data["GetRegister46"])){?>
                                                        <?php
          if($row['id_student'] == Session::get('id_student')){
echo "<div class='text-center'><img class='img-circle' width='20%' src='https://icon-library.com/images/success-icon-png/success-icon-png-8.jpg'/></div>";
          }else{  
        }
        ?>

                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                      </div>
                    </div></div></div>
                   
</div>

 <script>
        $(document).ready(function () {
            $('#exampleModals').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id_schedule = button.data('id_schedule') // Extract info from data-* attributes
                $('#id_schedule').attr('value', id_schedule);
            })

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var today = new Date(),
                year = today.getFullYear(),
                month = today.getMonth(),
                monthTag = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8",
                    "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
                ],
                day = today.getDate(),
                days = document.getElementsByTagName('td'),
                selectedDay,
                setDate,
                daysLen = days.length;
            const first = today.getDate() - today.getDay() + 1;
            const Mo = String(new Date(today.setDate(first)));
            const We = String(new Date(today.setDate(first + 2)));
            const Fr = String(new Date(today.setDate(first + 4)));

            function Calendar(selector, options) {
                this.options = options;
                this.draw();

            }

            function convert(str) {
                var mnths = {
                    Jan: "01",
                    Feb: "02",
                    Mar: "03",
                    Apr: "04",
                    May: "05",
                    Jun: "06",
                    Jul: "07",
                    Aug: "08",
                    Sep: "09",
                    Oct: "10",
                    Nov: "11",
                    Dec: "12"
                },
                    date = str.split(" ");

                return [date[2], mnths[date[1]], date[3]].join("-");
            }

            $('.mon').text(convert(Mo));
            $('.wed').text(convert(We));
            $('.fri').text(convert(Fr));

        }, false);
    </script>
 <?php }?>