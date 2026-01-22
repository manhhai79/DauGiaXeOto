document.addEventListener("DOMContentLoaded", function() {
    window.cart = [];
    window.toggleCart = function() {
        document.getElementById('cartSidebar').classList.toggle('open');
        document.getElementById('cartOverlay').classList.toggle('show');
    }
    window.addToCart = function(name, price, img) {
        if(window.cart.find(x => x.name == name)) {
            Swal.fire({ icon: 'warning', title: 'Đã có trong giỏ', text: 'Bạn đã chọn xe này rồi!', background: '#222', color: '#fff' });
            return;
        }
        window.cart.push({ name, price, img, deposit: 50000000 });
        updateCart();
        document.getElementById('cartSidebar').classList.add('open');
        document.getElementById('cartOverlay').classList.add('show');
        Swal.fire({ icon: 'success', title: 'Đã thêm cọc!', text: name, showConfirmButton: false, timer: 1000, background: '#222', color: '#fff', iconColor: '#ffc107' });
    }
    window.removeFromCart = function(index) {
        window.cart.splice(index, 1);
        updateCart();
    }
    function updateCart() {
        const container = document.getElementById('cartItems');
        const countBadge = document.getElementById('cart-count');
        const totalText = document.getElementById('cartTotal');
        countBadge.innerText = window.cart.length;
        if(window.cart.length == 0) {
            container.innerHTML = '<div class="text-center text-secondary mt-5"><i>Chưa có xe nào</i></div>';
            totalText.innerText = '0₫';
            return;
        }
        let html = '';
        let total = 0;
        window.cart.forEach((item, i) => {
            total += item.deposit;
            html += `<div class="cart-item"><img src="${item.img}"><div style="flex:1"><div style="font-size:13px; font-weight:700">${item.name}</div><div style="font-size:11px; color:#aaa">Cọc: 50.000.000₫</div></div><button class="btn-remove" onclick="removeFromCart(${i})"><i class="fa-solid fa-trash"></i></button></div>`;
        });
        container.innerHTML = html;
        totalText.innerText = total.toLocaleString() + '₫';
    }
    let targetDate = new Date();
    targetDate.setDate(targetDate.getDate() + 2);
    function updateTimer() {
        const now = new Date().getTime();
        const diff = targetDate - now;
        if (diff < 0) return;
        const d = Math.floor(diff / (1000 * 60 * 60 * 24));
        const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const s = Math.floor((diff % (1000 * 60)) / 1000);
        document.getElementById('d').innerText = d < 10 ? '0'+d : d;
        document.getElementById('h').innerText = h < 10 ? '0'+h : h;
        document.getElementById('m').innerText = m < 10 ? '0'+m : m;
        document.getElementById('s').innerText = s < 10 ? '0'+s : s;
    }
    setInterval(updateTimer, 1000);
    updateTimer();
    const chatBox = document.getElementById('chatBox');
    const users = ["Tuấn Hưng", "Cường Dollar", "Minh Nhựa", "Phan Quân", "User8812"];
    const comments = ["Đẹp quá!", "3 tỷ chốt đơn", "Lên giá đi", "Siêu phẩm!", "Đã bid 450tr"];
    function addMessage() {
        const user = users[Math.floor(Math.random() * users.length)];
        const text = comments[Math.floor(Math.random() * comments.length)];
        const div = document.createElement('div');
        div.className = 'chat-msg';
        div.innerHTML = `<b>${user}:</b> <span>${text}</span>`;
        chatBox.appendChild(div);
        chatBox.scrollTop = chatBox.scrollHeight;
    }
    setInterval(addMessage, 2500);
    for(let i=0; i<3; i++) addMessage();
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const updateCount = () => {
            const count = +counter.innerText.replace(/,/g, '');
            const inc = target / 100;
            if(count < target) { counter.innerText = Math.ceil(count + inc).toLocaleString(); setTimeout(updateCount, 20); }
            else { counter.innerText = target.toLocaleString(); }
        };
        updateCount();
    });
});