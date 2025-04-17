import random

# List of creepy messages to inject
SCARY_MESSAGES = [
    "!!! YOU ARE HACKED !!!",
    "YOUR SYSTEM IS COMPROMISED",
    "DELETE NOW OR LOSE EVERYTHING",
    "VIRUS ACTIVATED",
    "ALL YOUR FILES ARE ENCRYPTED",
    "PAY $1000 TO UNLOCK",
    "THIS DEVICE IS NOW REMOTELY CONTROLLED",
    "!!! CRITICAL ERROR !!!",
    "WARNING: MALWARE DETECTED",
    "INTRUDER ALERT",
    "!!! DATA LEAK IN PROGRESS !!!",
]

# Big list of random emojis to fill space
EMOJIS = "🌀🍕🦄⚡🔥🌪️🎲🐉💣🍣✨🔮🌵🚀🎩🍀📦🦖🍩🌚🍄💎🎻🥨⚓🧀🎭🛸🍍👑🐙🌶️🎹🍬🪐🚪🥦🎸🍉🦊🍂🎯🐋🥝🚲🍇🦦🎨🍿🦚🌊🍹🪁🍖🎷🦴🍈🐸🎲🦩🍔🎮🦋🍯🪶🍎🐧⚖️🍥🦄🌮🎴🍜🪕🍓🦍🍞🎸🍤🦉🌵🎭🍟🦎🍷🎡🍢🐊🍭🎪🍳🦜🍦🍮🦈🍩🌪️🍧🦄🌀"

# How often to insert scary messages (every ~X characters)
MESSAGE_FREQUENCY = 10_000  

# Generate 1 million characters with hidden scary messages
def generate_emoji_bomb():
    output = []
    target_length = 1_000_000
    current_length = 0
    
    while current_length < target_length:
        # Add a random chunk of emojis (100-500 chars)
        emoji_chunk = ''.join(random.choices(EMOJIS, k=random.randint(100, 500)))
        output.append(emoji_chunk)
        current_length += len(emoji_chunk)
        
        # Occasionally inject a scary message
        if random.random() < (MESSAGE_FREQUENCY / target_length * 2):
            scary_msg = random.choice(SCARY_MESSAGES)
            output.append(f" {scary_msg} ")
            current_length += len(scary_msg) + 2
    
    # Trim to exactly 1M characters
    final_text = ''.join(output)[:target_length]
    return final_text

# Save to file
if __name__ == "__main__":
    bomb_text = generate_emoji_bomb()
    with open("emoji_bomb.txt", "w", encoding="utf-8") as f:
        f.write(bomb_text)
    print("💣 Emoji bomb generated! (1,000,000 characters) 💣")