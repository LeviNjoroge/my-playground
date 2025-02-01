import { API_KEY } from "./.gitignore/stuff";
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
  const message = (document.getElementById("#q") as HTMLInputElement)?.value;
  const responce = (document.getElementById("#content") as HTMLInputElement);
  const completion = await openai.chat.completions.create({
    model: "deepseek/deepseek-r1:free",
    messages: [
      {
        "role": "user",
        "content": message
      }
    ]
  })
    console.log(completion.choices[0].message)
    responce.innerHTML = completion.choices[0].message.content;
}