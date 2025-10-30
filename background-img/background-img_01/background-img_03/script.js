const boxes = document.querySelectorAll('.box');

// 追蹤被選中的兩個方格
let selectedBoxes = [];

// 遍歷所有方格，並為每個方格添加點擊事件監聽器
boxes.forEach(box => {
    box.addEventListener('click', () => {
        // 1. 如果已經選滿兩個方格，則不響應點擊，直到下一次交換完成
        if (selectedBoxes.length === 2) {
            return;
        }

        // 檢查當前方塊是否已經被選中（用於取消選中）
        const index = selectedBoxes.indexOf(box);
        if (index > -1) {
            // 如果已經在陣列中，則取消選中
            selectedBoxes.splice(index, 1);
            box.classList.remove('selected');
        } else {
            // 如果不在陣列中，則加入選中陣列
            selectedBoxes.push(box);
            box.classList.add('selected'); 
            
            // 2. 如果現在剛好選滿了兩個方格，則執行交換
            if (selectedBoxes.length === 2) {
                swapBoxes(selectedBoxes[0], selectedBoxes[1]);
                
                // 3. 完成交換後，清除選中狀態並重置陣列
                selectedBoxes[0].classList.remove('selected');
                selectedBoxes[1].classList.remove('selected');
                selectedBoxes = []; // 重置為空陣列，準備下一次交換
            }
        }
    });
});

/**
 * 交換兩個元素的 class 列表，間接實現樣式（包括背景圖）的交換。
 * @param {HTMLElement} boxA - 第一個要交換的方格元素。
 * @param {HTMLElement} boxB - 第二個要交換的方格元素。
 */
function swapBoxes(boxA, boxB) {
    // 提取出所有排除 'box' 和 'selected' 的專有類別 (e.g., 'box1', 'box2')
    const classA = Array.from(boxA.classList).filter(cls => cls !== 'box' && cls !== 'selected');
    const classB = Array.from(boxB.classList).filter(cls => cls !== 'box' && cls !== 'selected');

    // 1. 清除 boxA 和 boxB 上原有的專有類別
    classA.forEach(cls => boxA.classList.remove(cls));
    classB.forEach(cls => boxB.classList.remove(cls));

    // 2. 將 boxA 的專有類別賦予給 boxB
    classA.forEach(cls => boxB.classList.add(cls));

    // 3. 將 boxB 的專有類別賦予給 boxA
    classB.forEach(cls => boxA.classList.add(cls));
    
    // 4. 交換後，我們也要交換它們在 DOM 中的**順序**，以確保視覺上它們的位置也對調了（如果需要的話）
    // 這裡我們使用 insertBefore/parentNode 邏輯來交換它們在父元素中的順序
    const parent = boxA.parentNode;
    const nextSiblingB = boxB.nextSibling === boxA ? boxA.nextSibling : boxB.nextSibling;

    // 交換在 DOM 中的位置（這一步驟有時可以省略，但對保持佈局一致性很有用）
    parent.insertBefore(boxB, boxA);
    parent.insertBefore(boxA, nextSiblingB);
}