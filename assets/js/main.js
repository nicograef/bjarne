$(document).ready(() => {
  for (let i = 0; i < 15; i++) {
    $('#svg-wrapper').append(generateTriangle())
  }
})

function generateTriangle() {
  const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
  svg.setAttribute('height', '100')
  svg.setAttribute('width', '100')

  const color = getRandomColor()
  const offset = getRandomOffset()

  svg.innerHTML = `
        <polygon points="0,0 0,100 100,100" fill="${color}" />
    `

  svg.style.zIndex = '-1'
  svg.style.opacity = '0.4'
  svg.style.position = 'absolute'
  svg.style.top = `${offset.top}px`
  svg.style.left = `${offset.left}px`

  const randomScale = Math.random() * 3 + 0.25
  const randomDegree = Math.floor(Math.random() * 365)

  svg.style.transform = `scale(${randomScale}) rotate(${randomDegree}deg)`

  return svg
}

function getRandomOffset() {
  const maxHeight = $(document).height()
  const maxWidth = $(document).width()

  const topOffset = Math.floor(Math.random() * maxHeight) - 150
  const leftOffset = Math.floor(Math.random() * maxWidth) - 150

  return { top: topOffset, left: leftOffset }
}

function getRandomColor() {
  const colors = [
    'Red',
    'Green',
    'Orange',
    'Yellow',
    'Blue',
    'Purple',
    'Aquamarine',
    'Teal',
    'DeepPink',
    'HoneyDew',
    'MistyRose',
    'WhiteSmoke',
  ]
  const randomIndex = Math.floor(Math.random() * colors.length)

  return colors[randomIndex]
}
