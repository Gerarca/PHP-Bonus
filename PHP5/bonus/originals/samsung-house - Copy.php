<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $page = "Samsung Stores ";
      include 'includes/head.php';
    ?>

</head>
<body>
    <div class="page-wrapper">
      <?php
        include 'includes/header.php';
      ?>

        <main class="main" style="margin-bottom: 0;">
            <div class="page-header page-header-bg" style="background-image: url('assets/images/banner-shouse.jpg');"></div>
            <div class="container page-header-title">
                <h1>Samsung Stores</h1>

            </div>
            <hr style="margin: 15px 0;">


            <div class="about-section mb-30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="subtitle">Nuestros locales</h2>
                            <br>
                        </div>

                        <?php

                            $contador = 0;
                            $resultStore = mysql_query("SELECT * FROM stores ORDER BY id DESC");
                            while($rowStores = mysql_fetch_array($resultStore)){
                         ?>
                                <div class="col-md-6 mt-20">
                                    <h3 class="subtitle" style="text-align: left; display: inline-block;margin-top: 15px;"><?= $rowStores["nombre"] ?> </h3>
                                    <img src="<?= $raiz ?>public/stores/<?= $rowStores['logo'] ?>" alt="" width="160" style="margin-bottom: 15px;float: right;" loading="lazy">

                                    <div id="carousel-suc-<?= $contador ?>" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <?php
                                            if($rowStores["imagen1"] != ""){
                                         ?>
                                                <li data-target="#carousel-suc-<?= $contador ?>" data-slide-to="0" class="active"></li>
                                        <?php

                                            }
                                            if($rowStores["imagen2"] != "") {
                                        ?>
                                                <li data-target="#carousel-suc-<?= $contador ?>" data-slide-to="1"></li>
                                        <?php
                                            }
                                            if($rowStores["imagen3"] != "") {
                                         ?>
                                                <li data-target="#carousel-suc-<?= $contador ?>" data-slide-to="2"></li>
                                        <?php
                                            }
                                            if($rowStores["imagen4"] != "") {
                                         ?>
                                                <li data-target="#carousel-suc-<?= $contador ?>" data-slide-to="4"></li>
                                        <?php } ?>
                                      </ol>
                                      <div class="carousel-inner">
                                        <?php
                                            if($rowStores["imagen1"] != ""){
                                         ?>
                                                <div class="carousel-item active">
                                                  <img class="d-block w-100" src="<?= $raiz ?>/public/stores/<?= $rowStores['imagen1'] ?>" alt="First slide" loading="lazy">
                                                </div>
                                        <?php

                                            }
                                            if($rowStores["imagen2"] != "") {
                                        ?>
                                                <div class="carousel-item">
                                                  <img class="d-block w-100" src="<?= $raiz ?>/public/stores/<?= $rowStores['imagen2'] ?>" alt="Second slide" loading="lazy">
                                                </div>
                                        <?php
                                            }
                                            if($rowStores["imagen3"] != "") {
                                         ?>
                                                <div class="carousel-item">
                                                  <img class="d-block w-100" src="<?= $raiz ?>/public/stores/<?= $rowStores['imagen3'] ?>" alt="Third slide" loading="lazy">
                                                </div>
                                       <?php
                                            }
                                            if($rowStores["imagen4"] != "") {
                                         ?>
                                                <div class="carousel-item">
                                                  <img class="d-block w-100" src="<?= $raiz ?>/public/stores/<?= $rowStores['imagen4'] ?>" alt="Fourth slide" loading="lazy">
                                                </div>
                                        <?php } ?>
                                        </div>
                                      <a class="carousel-control-prev" href="#carousel-suc-<?= $contador ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carousel-suc-<?= $contador ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Siguiente</span>
                                      </a>
                                    </div>
                                    <div class="pt-20">
                                        <!-- <h4 class="subtitle" style="text-align: left;">Team Leaders</h4>
                                        <p><?= $rowStores['team'] ?></p> -->

                                        <h4 class="subtitle" style="text-align: left;">Horarios de Atención</h4>
                                        <div><?= $rowStores['horarios'] ?></div>

                                    </div>
                                </div>
                        <?php
                                $contador++;
                            }
                         ?>


                    </div>

                    <div class="about-section bg1 mb-5" style="padding: 6rem 0;">
                      <div class="container text-center">
                        <h2 class="subtitle">Visita nuestra Tienda Online</h2>
                        <a href="https://shop.samsung.com.py/" target="_blank" class="btn btn-primary">Ver tienda</a>
                      </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-8 siguenos">
                            <ul class="list-inline" style="margin: 0;">
                                <li class="list-inline-item list-inline-title pr-40"><h3 class="subtitle" style="text-align: left;">Síguenos</h3></li>
                                <li class="list-inline-item pr-20">
                                    <a href="https://www.facebook.com/Samsung-House-2116871794996228/" target="_blank">
                                        <i class="icon-facebook"></i> /Samsung House
                                    </a>
                                </li>
                                <li class="list-inline-item pr-20">
                                    <a href="https://www.instagram.com/shousepy/" target="_blank">
                                        <i class="icon-instagram"></i> @shousepy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4 siguenos">
                            <ul class="list-inline" style="margin: 0;">
                                <li class="list-inline-item"><h3 class="subtitle" style="text-align: left;">Teléfono</h3></li>
                                <li class="list-inline-item pr-20">
                                    <a href="tel:+595217299999" target="_blank">
                                        <i class="icon-phone"></i> +595 21 729 9999
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr style="margin: 4.5rem auto 5rem;">
                   <!--  <div class="row calendario-act justify-content-between">
                        <div class="col-12">
                            <h3 class="subtitle" style="text-align: left;">Calendario de eventos</h3>
                            <br>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4">
                            <div id="calendar-act"></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-7 columna-eventos">
                            <div id="sin-eventos" style="display: block;">
                                <h3 class="subtitle">Próximos eventos</h3>
                                <ul>
                                    <?php
                                        $mes = date('m');
                                        $year = date('Y');
                                        $resultEventos = mysql_query("SELECT * FROM eventos WHERE fecha_evento BETWEEN '$year-$mes-01' AND '$year-$mes-31' ");
                                        while($rowEventos = mysql_fetch_array($resultEventos)){
                                     ?>
                                        <li class="mb-40">
                                            <h3><?= $rowEventos["evento"] ?></h3><h5 style="margin: 0;">Fecha: <?=  strftime("%d/%m/%Y", strtotime($rowEventos["fecha_evento"])) ?></h5>
                                        </li>
                                    <?php
                                        }
                                     ?>
                                </ul>
                            </div>
                            <div id="curso-desc" class="cursos-desc" style="display: none;">
                                <h3 class="subtitle" style="text-transform: none;">Galaxy Unpacked</h3>
                                <br>
                                <img src="assets/images/evento-samsung.png" alt="">
                                <br>
                                <h4><strong>Fecha:</strong> 28 y 29 de Octubre de 2019, 16 hs.</h4>
                                <h4><strong>Sede:</strong> 	Paseo La Galería. <br>
                                <a href="https://goo.gl/maps/gUxZfjSQxXCunz7q6" target="_blank"><i class="icon-location"></i> Sta Teresa y Aviadores Del Chaco, 1821 Asunción</a></h4>
                                <br>
                                <h4>Información</h4>
                                <h4><strong>Correo:</strong> <a href="mailto:consultas.ventas@bonus.com.py">consultas.ventas@bonus.com.py</a></h4>
                                <br>
                                <h4>Descripción</h4>
                                <p>Seguí la presentación en vivo el 20 de Febrero a las 16:00hs. y descubrí el futuro #SamsungEvent #DoWhatYouCant
                                    Enterate todo sobre el Nuevo Galaxy en este link <a href="https://bit.ly/2FUVb8B" target="_blank">https://bit.ly/2FUVb8B</a>
                                </p>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </main><!-- End .main -->

      <?php
        include 'includes/footer2.php';
      ?>


    </div>

    <?php
      include 'includes/menu.php';
    ?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
    <?php
      include 'includes/scripts.php';
    ?>
    <script src="assets/js/uikit.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/calendario.css"> -->
    <!-- <script src="assets/js/moment.js"></script> -->
    <!-- <script type="text/javascript">
    !function() {

      var today = moment();

      function Calendar(selector, events) {
        this.el = document.querySelector(selector);
        this.events = events;
        this.current = moment().date(1);
        this.draw();
        var current = document.querySelector('.today');
        if(current) {
          var self = this;
          window.setTimeout(function() {
            self.openDay(current);
          }, 500);
        }
      }

      Calendar.prototype.draw = function() {
        //Create Header
        this.drawHeader();

        //Draw Month
        this.drawMonth();

        // this.drawLegend();
      }

      Calendar.prototype.drawHeader = function() {
        var self = this;
        if(!this.header) {
          //Create the header elements
          this.header = createElement('div', 'header');
          this.header.className = 'header';

          this.title = createElement('h1');

          var right = createElement('div', 'right');
          right.addEventListener('click', function() { self.nextMonth(); });

          var left = createElement('div', 'left');
          left.addEventListener('click', function() { self.prevMonth(); });

          //Append the Elements
          this.header.appendChild(this.title);
          this.header.appendChild(right);
          this.header.appendChild(left);
          this.el.appendChild(this.header);
        }

        this.title.innerHTML = this.current.format('MMMM YYYY');
      }

      Calendar.prototype.drawMonth = function() {
        var self = this;

        // this.events.forEach(function(ev) {
        //  ev.date = self.current.clone().date(Math.random() * (29 - 1) + 1);
        // });


        if(this.month) {
          this.oldMonth = this.month;
          this.oldMonth.className = 'month out ' + (self.next ? 'next' : 'prev');
          this.oldMonth.addEventListener('webkitAnimationEnd', function() {
            self.oldMonth.parentNode.removeChild(self.oldMonth);
            self.month = createElement('div', 'month');
            self.backFill();
            self.currentMonth();
            self.fowardFill();
            self.el.appendChild(self.month);
            window.setTimeout(function() {
              self.month.className = 'month in ' + (self.next ? 'next' : 'prev');
            }, 16);
          });
        } else {
            this.month = createElement('div', 'month');
            this.el.appendChild(this.month);
            this.backFill();
            this.currentMonth();
            this.fowardFill();
            this.month.className = 'month new';
        }
      }

      Calendar.prototype.backFill = function() {
        var clone = this.current.clone();
        var dayOfWeek = clone.day();

        if(!dayOfWeek) { return; }

        clone.subtract('days', dayOfWeek+1);

        for(var i = dayOfWeek; i > 0 ; i--) {
          this.drawDay(clone.add('days', 1));
        }
      }

      Calendar.prototype.fowardFill = function() {
        var clone = this.current.clone().add('months', 1).subtract('days', 1);
        var dayOfWeek = clone.day();

        if(dayOfWeek === 6) { return; }

        for(var i = dayOfWeek; i < 6 ; i++) {
          this.drawDay(clone.add('days', 1));
        }
      }

      Calendar.prototype.currentMonth = function() {
        var clone = this.current.clone();

        while(clone.month() === this.current.month()) {
          this.drawDay(clone);
          clone.add('days', 1);
        }
      }

      Calendar.prototype.getWeek = function(day) {
        if(!this.week || day.day() === 0) {
          this.week = createElement('div', 'week');
          this.month.appendChild(this.week);
        }
      }

      Calendar.prototype.drawDay = function(day) {
        var self = this;
        this.getWeek(day);

        //Outer Day
        var outer = createElement('div', this.getDayClass(day));
        outer.addEventListener('click', function() {
          self.openDay(this);
          document.getElementById("curso-desc").style.display = "none";
          document.getElementById("sin-eventos").style.display = "block";
        });

        //Day Name
        var name = createElement('div', 'day-name', day.format('ddd'));

        //Day Number
        var number = createElement('div', 'day-number', day.format('DD'));


        //Events
        var events = createElement('div', 'day-events');
        this.drawEvents(day, events);

        outer.appendChild(name);
        outer.appendChild(number);
        outer.appendChild(events);
        this.week.appendChild(outer);
      }

      Calendar.prototype.drawEvents = function(day, element) {
        if(day.month() === this.current.month()) {
          var todaysEvents = this.events.reduce(function(memo, ev) {
            if(ev.date.isSame(day, 'day')) {
              memo.push(ev);
            }
            return memo;
          }, []);

          todaysEvents.forEach(function(ev) {
            var evSpan = createElement('span', ev.color);
            element.appendChild(evSpan);
          });
        }
      }

      Calendar.prototype.getDayClass = function(day) {
        classes = ['day'];
        if(day.month() !== this.current.month()) {
          classes.push('other');
        } else if (today.isSame(day, 'day')) {
          classes.push('today');
        }
        return classes.join(' ');
      }

      Calendar.prototype.openDay = function(el) {
        var details, arrow;
        var dayNumber = +el.querySelectorAll('.day-number')[0].innerText || +el.querySelectorAll('.day-number')[0].textContent;
        var day = this.current.clone().date(dayNumber);

        var currentOpened = document.querySelector('.details');

        //Check to see if there is an open detais box on the current row
        if(currentOpened && currentOpened.parentNode === el.parentNode) {
          details = currentOpened;
          arrow = document.querySelector('.arrow');
        } else {
          //Close the open events on differnt week row
          //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
          if(currentOpened) {
            currentOpened.addEventListener('webkitAnimationEnd', function() {
              currentOpened.parentNode.removeChild(currentOpened);
            });
            currentOpened.addEventListener('oanimationend', function() {
              currentOpened.parentNode.removeChild(currentOpened);
            });
            currentOpened.addEventListener('msAnimationEnd', function() {
              currentOpened.parentNode.removeChild(currentOpened);
            });
            currentOpened.addEventListener('animationend', function() {
              currentOpened.parentNode.removeChild(currentOpened);
            });
            currentOpened.className = 'details out';
          }

          //Create the Details Container
          details = createElement('div', 'details in');

          //Create the arrow
          var arrow = createElement('div', 'arrow');

          //Create the event wrapper

          details.appendChild(arrow);
          el.parentNode.appendChild(details);
        }

        var todaysEvents = this.events.reduce(function(memo, ev) {
          if(ev.date.isSame(day, 'day')) {
            memo.push(ev);
          }
          return memo;
        }, []);

        this.renderEvents(todaysEvents, details);

        arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 50 + 'px';
      }

        Calendar.prototype.renderEvents = function(events, ele) {
            //Remove any events in the current details element
            var currentWrapper = ele.querySelector('.events');
            var wrapper = createElement('div', 'events in' + (currentWrapper ? ' new' : ''));

            events.forEach(function(ev) {
              var div = createElement('div', 'event');
              var square = createElement('div', 'event-category ' + ev.color);
              var span = createElement('a', 'evento', ev.eventName);
              span.addEventListener('click', function() {
                // document.getElementById("curso-desc").style.display = "block";
                // document.getElementById("sin-eventos").style.display = "none";
              });
              span.href = "javascript:void(0);";

              div.appendChild(square);
              div.appendChild(span);
              wrapper.appendChild(div);
            });

            if(!events.length) {
              var div = createElement('div', 'event empty');
              var span = createElement('span', '', 'Sin eventos');

              div.appendChild(span);
              wrapper.appendChild(div);
              document.getElementById("curso-desc").style.display = "none";
              document.getElementById("sin-eventos").style.display = "block";

            }

            if(currentWrapper) {
              currentWrapper.className = 'events out';
              currentWrapper.addEventListener('webkitAnimationEnd', function() {
                currentWrapper.parentNode.removeChild(currentWrapper);
                ele.appendChild(wrapper);
              });
              currentWrapper.addEventListener('oanimationend', function() {
                currentWrapper.parentNode.removeChild(currentWrapper);
                ele.appendChild(wrapper);
              });
              currentWrapper.addEventListener('msAnimationEnd', function() {
                currentWrapper.parentNode.removeChild(currentWrapper);
                ele.appendChild(wrapper);
              });
              currentWrapper.addEventListener('animationend', function() {
                currentWrapper.parentNode.removeChild(currentWrapper);
                ele.appendChild(wrapper);
              });
            } else {
              ele.appendChild(wrapper);
            }
        }

      Calendar.prototype.nextMonth = function() {
        this.current.add('months', 1);
        this.next = true;
        this.draw();
      }

      Calendar.prototype.prevMonth = function() {
        this.current.subtract('months', 1);
        this.next = false;
        this.draw();
      }

      window.Calendar = Calendar;

      function createElement(tagName, className, innerText) {
        var ele = document.createElement(tagName);
        if(className) {
          ele.className = className;
        }
        if(innerText) {
          ele.innderText = ele.textContent = innerText;
        }
        return ele;
      }
    }();

</script> -->

<?php

	$eventos = array();
	$resultEvents = mysql_query("SELECT * FROM eventos");
	while($rowEvents = mysql_fetch_array($resultEvents)){
		$eventos[] = [
			'eventName' => $rowEvents['evento'],
			'calendar' => 'Work',
			'color' => 'orange',
			'date' => $rowEvents['fecha_evento']
		];
	}

 ?>

<script>

    !function() {
      var data = [
          { eventName: 'Lanzamiento Windfree', calendar: 'Work', color: 'orange', date: moment('2019-11-12') },
          { eventName: 'Knox B2B Event', calendar: 'Work', color: 'orange', date: moment('2019-11-14') },
          { eventName: 'AKG Launching', calendar: 'Work', color: 'orange', date: moment('2019-11-21') }
      ];

      data = [];

      <?php

      	foreach ($eventos as $evento) {
      		?>

      		data.push({
      			eventName: '<?= $evento["eventName"] ?>',
      			calendar: 'Work',
      			color: 'orange',
      			date: moment('<?= $evento["date"] ?>')
      		})

      		<?php
      	}

       ?>



      function addDate(ev) {

      }

      var calendar = new Calendar('#calendar-act', data);

    }();

    </script>


</body>
</html>
