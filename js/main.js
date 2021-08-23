function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

$(function () {
  $('#btnRandomColors').on('click', (event) => {
    const elems = ['h1', 'h2', 'p', 'a.navbar-brand', 'span', 'a.log']

    $(elems.join(', ')).each(function (index, element) {
      const text = $(element).text()
      const newText = $(`<${$(element).prop('tagName')} class='${$(element).attr('class') ?? ' '}' href='${$(element).attr('href') ?? '#'}'>`);
      console.log($(element).prop('tagName'))
      console.log(newText)
      for (let i = 0; i < text.length; i++) {
        newText.append($(`<font color="${getRandomColor()}">${text[i]}</font>`))
      }
      $(this).replaceWith(newText)
    })

    $('body, nav').addClass('randomColorsGradient')
  })
})
