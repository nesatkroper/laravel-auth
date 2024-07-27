<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('./dist/css/adminlte.css') }}" />
    <link rel="stylesheet" href="{{ url('./fontawesome/css/all.css') }}" />
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <x-header></x-header>
      <x-sidebar></x-sidebar>
      <main class="app-main">
        {{ $slot }}
      </main>
    </div>
    <script src="{{ url('./dist/js/adminlte.js') }}"></script>
    <script src="{{ url('./fontawesome/js/all.js') }}"></script>
    <script>
      const today = new Date().toISOString().split("T")[0];
      document.getElementById("today").value = today;

      const status = document.getElementsByClassName("status");
      if (status.value === "Fired") status.className = "text-danger";
    </script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
      const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
      };
      document.addEventListener("DOMContentLoaded", function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
          sidebarWrapper &&
          typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <script>
      const connectedSortables =
        document.querySelectorAll(".connectedSortable");
      connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
          group: "shared",
          handle: ".card-header",
        });
      });

      const cardHeaders = document.querySelectorAll(
        ".connectedSortable .card-header"
      );
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
      });
    </script>
  </body>
</html>
