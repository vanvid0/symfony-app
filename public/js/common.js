const $doc = document.querySelector('.js-test-btn');

if ($doc) {
  $doc.addEventListener('click', function () {
    alert('クリックされました！');
  });
}