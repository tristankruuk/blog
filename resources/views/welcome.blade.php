<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>

<button
    class="
        rounded-md px-3 py-1.5
        text-base font-normal leading-normal text-white
        border border-[#0087fe]
        bg-[#0087fe]

        hover:border-[#0070fa]
        hover:bg-[#0070fa]

        focus-visible:outline-transparent
        focus-visible:shadow-[0_0_0_0.25rem_#6FC8FF]

        active:border-[#0070fa]
        active:bg-[#0070fa]

        disabled:pointer-events-none
        disabled:opacity-65
    "
>
    Button
</button>


<div class="hover-3d">
  <!-- content -->
  <figure class="max-w-100 rounded-2xl">
    <img src="https://img.daisyui.com/images/stock/creditcard.webp" alt="3D card" />
  </figure>
  <!-- 8 empty divs needed for the 3D effect -->
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
</body>

</html>
