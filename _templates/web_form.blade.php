<form action="" method="post">
    <h2>Create a New Ninja</h2>

    {{-- Ninja Name --}}
    <label for="name">Ninja Name:</label>
    <input
        type="text"
        name="name"
        id="name"
        required
    >

    {{-- Ninja Strength --}}
    <label for="skill">Ninja Skill (0-100):</label>
    <input
        type="number"
        name="skill"
        id="skill"
        required
    >

    {{-- Ninja Bio --}}
    <label for="bio">Biography:</label>
    <textarea
        rows="5"
        name="bio"
        id="bio"
        required
    ></textarea>

    {{-- Select a dojo --}}
    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>

    </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    {{-- Validation errors --}}
</form>
