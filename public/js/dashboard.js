const dashboardEl = document.querySelector('.dashboard');
const dashboardToggleEl = dashboardEl.querySelector('.dashboard__state-toggle');

export const initDashboard = () =>
  dashboardToggleEl.addEventListener('click', () => {
    if (dashboardEl.classList.contains('dashboard--shown')) {
      fetch('/dashboard/toggle-state').then(() => {
        dashboardEl.classList.remove('dashboard--shown');
        dashboardEl.classList.add('dashboard--hidden');
        dashboardToggleEl.textContent = 'Показать панель администратора';
      })
    } else {
      fetch('/dashboard/toggle-state').then(() => {
        dashboardEl.classList.remove('dashboard--hidden');
        dashboardEl.classList.add('dashboard--shown');
        dashboardToggleEl.textContent = 'Скрыть панель администратора';
      })
    }
  });
