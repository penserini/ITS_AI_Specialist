import requests
import json

# URL dell'API locale di Ollama
url = "http://localhost:11434/api/chat"  # endpoint chat based di Ollama: msg con ruoli
#url = "http://localhost:11434/api/generate" # endpoint a completion-based

# Chiedi all'utente di inserire una domanda o prompt
prompt_input = input("Inserisci la tua domanda: ")

# Interazione in stile "completamento" della frase
'''
payload = {
    "model": "llama3.1",
    "prompt": prompt_input,
    "max_tokens": 100,  # puoi modificare la lunghezza della risposta
    # aggiungi altri parametri se necessari
}
'''

# Interazione in stile ruoli
payload = {
    "model": "llama3.1",
    "messages": [{"role":"user", "content":prompt_input}]
}

try:
    response = requests.post(url, json=payload, stream=True) 
    response.raise_for_status()  # verifica errori di richieste

    if response.status_code == 200:
        print("Streaming response from Ollama:")
        for line in response.iter_lines(decode_unicode=True):
            if line: #ignora le righe vuote
                try:
                    #parse each line as a JSON object
                    json_data = json.loads(line)
                    # Extract and print the assistant's message content
                    if "message" in json_data and "content" in json_data["message"]:
                        print(json_data["message"]["content"], end="")
                except json.JSONDecodeError:
                    print(f"\nFailed to parse line:{line}")
        print() # Assicurati che l'output finisca con una nuova linea
  
except requests.exceptions.RequestException as e:
    print("Errore durante la richiesta:", e)
