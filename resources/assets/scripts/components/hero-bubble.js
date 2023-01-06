/* eslint-disable */

export default {
  init() {
    if (document.querySelector('.bubble-header')) activateBubble()
  },
}

function activateBubble() {
  function bubblesEverywhere(bubbleCount) {
    const header = document.querySelector('.bubble-header')
    let i
    for (i = 1; i <= bubbleCount; i++) {
      let bubbleID = 'bubble' + i
      header.style.position = 'relative'
      header.style.overflow = 'hidden'

      const bubbleElem = document.createElement('div')
      bubbleElem.classList.add('bubble')
      bubbleElem.setAttribute('id', bubbleID)

      header.append(bubbleElem)
    }
  }

  bubblesEverywhere(20)

  document.querySelectorAll('.bubble').forEach(elem => {
    // Position & width of bubble
    const bottomPosition = Math.floor(Math.random() * 250)
    const leftPosition = Math.floor(Math.random() * (95 - 5) + 5)
    const l = Math.floor(Math.random() * (10 - 1) + 1)

    const colorVal = Math.floor(Math.random() * (4 - 1) + 1)
    let color
    switch (colorVal) {
      case 1:
        color = '#2A4268'
        break
      case 2:
        color = '#8DB9DC'
        break
      case 3:
        color = '#E7F1F3'
        break
      default:
        color = '#A5C8E4'
    }

    // Random Interval for Animation
    const int = Math.floor(Math.random() * (10 - 5) + 15)

    elem.style.borderColor = color
    elem.style.left = leftPosition + 'vw'

    elem.velocity({
      width: l + 'vw',
      height: l + 'vw',
      opacity: 0.25,
      bottom: bottomPosition + '%',
    }, {
      duration: int * 1000,
      loop: 1
    })
  })
}