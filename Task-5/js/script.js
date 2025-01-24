document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number")
  const speed = 200

  const animateCounter = (counter) => {
    const target = +counter.getAttribute("data-target")
    let count = 0
    const inc = target / speed
    const updateCount = () => {
      if (count < target) {
        count += inc
        counter.innerText = Math.ceil(count)
        setTimeout(updateCount, 1)
      } else {
        counter.innerText = target
      }
    }
    updateCount()
  }

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target)
        observer.unobserve(entry.target)
      }
    })
  }

  const observer = new IntersectionObserver(observerCallback, { threshold: 0.5 })

  counters.forEach((counter) => {
    observer.observe(counter)
  })
})

