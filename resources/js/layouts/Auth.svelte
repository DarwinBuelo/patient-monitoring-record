<script>
  // components for this layout
  import AuthNavbar from "../components/Navbars/AuthNavbar.svelte";
  import FooterSmall from "../components/Footers/FooterSmall.svelte";
  const registerBg2 = "../assets/img/register_bg_2.png";
</script>

<div>
  <AuthNavbar />
  <main>
    <section class="relative w-full h-full py-40 min-h-screen">
      <div
        class="absolute top-0 w-full h-full bg-blueGray-800 bg-no-repeat bg-full"
        style="background-image: url({registerBg2});"
      ></div>
      <slot></slot>
      <FooterSmall absolute="true" />
    </section>
  </main>
</div>
