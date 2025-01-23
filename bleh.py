def deposit(balance, amount):
    return balance + amount

def withdraw(balance, amount):
    if balance >= amount:
        return balance - amount
    else:
        print("Withdrawal denied. Insufficient funds.")
        return balance

def main():
    balance = 0
    while True:
        transaction = input("Enter transaction (D 100, W 200, Q): ").strip()
        
        if transaction.startswith("D "):
            try:
                amount = int(transaction.split()[1])
                balance = deposit(balance, amount)
            except ValueError:
                print("Invalid input. Please enter a valid deposit amount.")
        
        elif transaction.startswith("W "):
            try:
                amount = int(transaction.split()[1])
                balance = withdraw(balance, amount)
            except ValueError:
                print("Invalid input. Please enter a valid withdrawal amount.")
        
        elif transaction.startswith("Q"):
            break
        
        else:
            print("Invalid transaction. Please enter D for deposit, W for withdrawal, or Q to quit.")
    
    print(f"Net balance: {balance}")

if __name__ == "__main__":
    main()
