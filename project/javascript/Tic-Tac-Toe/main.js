// main.js
let currentPlayer = 'X';
let gameActive = true;
const playerNames = {
  X: 'Player 1',
  O: 'Player 2'
};

const currentPlayerDisplay = document.getElementById('current-player');
const player1NameInput = document.getElementById('player1-name');
const player2NameInput = document.getElementById('player2-name');
const boardCells = Array.from(document.querySelectorAll('td'));

function updatePlayerNames() {
  playerNames.X = player1NameInput.value || 'Player 1';
  playerNames.O = player2NameInput.value || 'Player 2';
}

function checkWin() {
  const squares = boardCells.map(cell => cell.textContent);
  const winPatterns = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],
    [0, 3, 6], [1, 4, 7], [2, 5, 8],
    [0, 4, 8], [2, 4, 6]
  ];
  for (const pattern of winPatterns) {
    const [a, b, c] = pattern;
    if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
      return squares[a];
    }
  }
  return null;
}

function clearTheBoard() {
  boardCells.forEach(cell => {
    cell.classList.remove('x', 'o');
    cell.textContent = '';
  });
  gameActive = true;
  currentPlayer = 'X';
  currentPlayerDisplay.textContent = playerNames[currentPlayer];
}

function handleClick(e) {
  if (!gameActive || e.target.textContent !== '') return;
  e.target.textContent = currentPlayer;
  e.target.classList.add(currentPlayer.toLowerCase());
  const winner = checkWin();
  if (winner) {
    alert(playerNames[winner] + " wins!");
    gameActive = false;
    return;
  }
  currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
  currentPlayerDisplay.textContent = playerNames[currentPlayer];
}

function setUpEventListeners() {
  boardCells.forEach(cell => cell.addEventListener('click', handleClick));
}

document.getElementById('restart').addEventListener('click', clearTheBoard);
player1NameInput.addEventListener('input', updatePlayerNames);
player2NameInput.addEventListener('input', updatePlayerNames);
updatePlayerNames();
setUpEventListeners();