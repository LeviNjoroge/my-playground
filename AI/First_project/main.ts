import { API_KEY } from "./stuff";
import OpenAI from "openai"

const openai = new OpenAI({
  baseURL: "https://openrouter.ai/api/v1",
  apiKey: API_KEY,
  defaultHeaders: {
    "HTTP-Referer": "<YOUR_SITE_URL>", // Optional. Site URL for rankings on openrouter.ai.
    "X-Title": "<YOUR_SITE_NAME>", // Optional. Site title for rankings on openrouter.ai.
  }
})

async function main() {
  const message = (document.getElementById("q") as HTMLInputElement)?.value ?? "what is a tree";
  const response = document.getElementById("content") as HTMLInputElement;
  const completion = await openai.chat.completions.create({
    model: "deepseek/deepseek-r1:free",
    messages: [
      {
        "role": "user",
        "content": "What is a tree?"
      }
    ]
  });
  console.log(completion.choices[0].message);
  if (response && completion.choices[0].message.content) {
    response.innerHTML = completion.choices[0].message.content;
  }
}