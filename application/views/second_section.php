</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom" style="display: none;">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">icq авап ыв</li>
						<li>skype авы</li>
						<li class="last">email ыававыап</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>что-то</h3>
					<p>
наверное что-то тоже тут напишется
					</p>
				</div>
				<br class="clearfix" />
			</div>
		<div id="footer">
			<a href="/">ОЛОЛо сд))</a> &copy; 2022</a>
		</div>
		</div>
<script>  //левое меню чтоб бегало за экраном
  (function(){  // анонимная функция (function(){ })(), чтобы переменные "a" и "b" не стали глобальными
  var a = document.querySelector('#sidebar'), b = null;  // селектор блока, который нужно закрепить
  window.addEventListener('scroll', Ascroll, false);
  document.body.addEventListener('scroll', Ascroll, false);  // если у html и body высота равна 100%
  function Ascroll() {
    if (b == null) {  // добавить потомка-обёртку, чтобы убрать зависимость с соседями
      var Sa = getComputedStyle(a, ''), s = '';
      for (var i = 0; i < Sa.length; i++) {  // перечислить стили CSS, которые нужно скопировать с родителя
        if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
          s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
        }
      }
      b = document.createElement('div');  // создать потомка
      b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
      a.insertBefore(b, a.firstChild);  // поместить потомка в цепляющийся блок первым
      var l = a.childNodes.length;
      for (var i = 1; i < l; i++) {  // переместить во вновь созданного потомка всех остальных потомков (итого: создан потомок-обёртка, внутри которого по прежнему работают скрипты)
        b.appendChild(a.childNodes[1]);
      }
      a.style.height = b.getBoundingClientRect().height + 'px';  // если под скользящим элементом есть другие блоки, можно своё значение
      a.style.padding = '0';
      a.style.border = '0';  // если элементу присвоен padding или border
    }
    if (a.getBoundingClientRect().top <= 0) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
      b.className = 'sticky';
    } else {
      b.className = '';
    }
    window.addEventListener('resize', function() {
      a.children[0].style.width = getComputedStyle(a, '').width
    }, false);  // если изменить размер окна браузера, измениться ширина элемента
  }
  })()
</script>
<script>
    function viewdiv(id) {
        var el = document.getElementById(id);
        var link = document.getElementById('toggleLink');
        if (el.style.display == "block") {
            el.style.display = "none";
        } else {
            el.style.display = "block";
        }
    }
</script>
</body>
</html>