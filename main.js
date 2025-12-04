
const UPDATE_INCOME_BUTTONS = document.querySelectorAll('.update_income');
const DELETE_INCOME_BUTTONS = document.querySelectorAll('.delete_income');
const CREATE_INCOME = document.querySelector('.create_income');
const CREATE_EXPENCE = document.querySelector('.create_expence');


UPDATE_INCOME_BUTTONS.forEach(element => {
    element.addEventListener('click', () => {
        const FORM = document.createElement('form');
        FORM.setAttribute('action', "./incomes/update.php");
        FORM.setAttribute('method', "POST");
        FORM.className = 'absolute bg-green-300 top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[20vw] h-[30vh] min-h-fit p-[5px] flex flex-col gap-[10px] rounded-[5px] items-center';
        FORM.innerHTML = `
        <h2 class="w-full text-center mb-[20px] text-[20px] ">update income</h2>

        <input type="hidden" name="method" value="PUT">
        <input type="hidden" name="id" value="${element.name}">

        <label class="flex flex-col w-full">
            <span>montant : </span>
            <input type="number" name="montant" placeholder="montant" class="w-full p-[10px] bg-white rounded-[5px]" >
        </label>

        <label class="flex flex-col w-full">
            <span>date : </span>
            <input type="date" name="created_at" class="w-full p-[10px] bg-white rounded-[5px]">
        </label>

        <label class="flex flex-col w-full">
            <span>description : </span>
            <textarea name="description" placeholder="description"  class="w-full p-[10px] bg-white rounded-[5px] h-[30vh]"></textarea>
        </label>

        <button class='bg-green-600 text-white text-bold w-fit p-[10px] px-[15px] rounded-[5px] cursor-pointer'  >update</button>` ;
        document.body.appendChild(FORM);

    });
});

DELETE_INCOME_BUTTONS.forEach(element => {
    element.addEventListener('click', (e) => {
        const FORM = document.createElement('form');
        FORM.setAttribute('action', "./incomes/delete.php");
        FORM.setAttribute('method', "POST");

        FORM.className = 'absolute bg-red-300 top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[20vw] h-[30vh] min-h-fit p-[5px] flex flex-col gap-[10px] rounded-[5px] items-center';
        FORM.innerHTML = `
        <h2 class="w-full text-center mb-[20px] text-[20px] ">delete income</h2>

        <input type="hidden" name="method" value="DELETE">
        <input type="hidden" name="id" value="${element.name}">

        <p>are you sure you want to delete this item</p>
        <button type="button" class='bg-red-600 text-white text-bold w-fit p-[10px] px-[15px] rounded-[5px] cursor-pointer' id='remove_form' > no</button>
        <button type="submit" class='bg-red-600 text-white text-bold w-fit p-[10px] px-[15px] rounded-[5px] cursor-pointer' > yes</button>
        ` ;

        FORM.querySelector('#remove_form').addEventListener('click' , ()=>FORM.remove()) ;
        document.body.appendChild(FORM);

    });
});

CREATE_INCOME.addEventListener('click' , ()=>create_item('incomes')) ;

CREATE_EXPENCE.addEventListener('click' , ()=>create_item('expences')) ;

function create_item(item){

        const FORM = document.createElement('form');
        FORM.setAttribute('action', `./${item}/create.php`);
        FORM.setAttribute('method', "POST");

        const style = item == 'expences' ? 'bg-red-300' : 'bg-green-300';
        FORM.className = `absolute top-[50%] ${style} left-[50%] translate-x-[-50%] translate-y-[-50%] w-[20vw] h-[30vh] min-h-fit p-[5px] flex flex-col gap-[10px] rounded-[5px] items-center`;
        FORM.innerHTML = `
        <h2 class="w-full text-center mb-[20px] text-[20px] ">create ${item.slice(0 , -1)}</h2>
        <button id='remove_form' class='bg-red-400 absolute top-[5px] right-[5px] w-[20px] h-[20px] rounded-full text-bold text-white flex items-center justify-center cursor-pointer ' >x</button>

        <label class="flex flex-col w-full">
            <span>montant : </span>
            <input type="number" name="montant" placeholder="montant" class="w-full p-[10px] bg-white rounded-[5px]" >
        </label>

        <label class="flex flex-col w-full">
            <span>date : </span>
            <input type="date" name="created_at" class="w-full p-[10px] bg-white rounded-[5px]">
        </label>

        <label class="flex flex-col w-full">
            <span>description : </span>
            <textarea name="description" placeholder="description"  class="w-full p-[10px] bg-white rounded-[5px] h-[30vh]"></textarea>
        </label>

        <button class='bg-green-600 text-white text-bold w-fit p-[10px] px-[15px] rounded-[5px] cursor-pointer'  >create</button>` ;
        ;

        FORM.querySelector('#remove_form').addEventListener('click' , ()=>FORM.remove()) ;
        document.body.appendChild(FORM);

}


